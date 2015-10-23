<?php

require 'vendor/autoload.php';
require 'lib/Villiger/View.php';
require 'config.php';

$app = new \Slim\Slim(array(
    'debug' => true,
    'templates.path' => './templates',
    'view' => new \Villiger\View()
));

\Slim\Route::setDefaultConditions(array(
    'language' => '[a-z]{2,2}',
    'page' => '[a-z]{3,}'
));

$app->get('(/)', function() use ($app) {
    $supportedLangs = array('de', 'en');
    $languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $language = 'en';

    foreach ($languages as $lang) {
        $lang = substr($lang, 0, 2);
        if (in_array($lang, $supportedLangs)) {
            $language = $lang;
            break;
        }
    }

    $app->redirect("/$language");
});

$app->get('/:language(/)', function($language) use ($app) {
    $app->render(
        'home.php',
        array('language' => $language, 'page' => null)
    );
});

$app->get('/:language/:page(/)', function($language, $page) use ($app) {
    $app->render(
        $page . '.php',
        array('language' => $language, 'page' => $page)
    );
});

$app->run();
