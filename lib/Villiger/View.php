<?php

namespace Villiger;

class View extends \Slim\View {

    public function translate($what) {
        include 'Translations.php';

        $language = $this->data->language;

        if (array_key_exists($language, $translations) && array_key_exists($what, $translations[$language])) {
            return $translations[$language][$what];
        } else {
            return $what;
        }
    }

    public function link($href, $title = null) {
        if (empty($title)) {
            $title = $href;
        }

        return "<a href=\"/{$this->data->language}/$href\">$title</a>";
    }

    public function render($template) {
        ob_start();
        require 'templates/' . $template;
        $yield = ob_get_clean();

        ob_start();
        require 'templates/layout/default.php';
        return ob_get_clean();
    }
}
