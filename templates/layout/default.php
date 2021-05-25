<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, user-scalable=no">
    <title><?php if (!empty($this->data->title)): ?><?= $this->data->title ?> &middot; <?php endif; ?>Villiger Technik</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600|Oswald:700" type="text/css">
    <link rel="stylesheet" href="/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <script src="/js/jquery.js"></script>
</head>
<body>
    <div class="header-row">
        <div class="section group">
            <div class="col span-full">
                <img src="/img/logo.png" class="logo" alt="Villiger Technik Logo" onclick="window.location = '/<?= $this->data->language ?>'">
                <ul class="navigation">
                    <li><?= $this->link('products', $this->translate('products')) ?></li>
                    <li><?= $this->link('about', $this->translate('company')) ?></li>
                    <li><?= $this->link('contact', $this->translate('contact')) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <?= $yield; ?>
    <div class="footer">
        Villiger Technik GmbH <span class="hidden-small">&middot;</span><span class="hidden-big"><br></span>
        CH-5647 Oberrüti <span class="hidden-small">&middot;</span><span class="hidden-big"><br></span>
        Tel +41 56 496 26 00 &middot; <a href="mailto:info@villigertechnik.ch" style="color: white;">info@villigertechnik.ch</a>
        <span class="hidden-small">&middot;</span><span class="hidden-big"><br></span>
        <strong>
            <?php if ($this->data->language == 'en'): ?>
                EN / <a href="/de/<?= $this->data->page ?>">DE</a>
            <?php else: ?>
                <a href="/en/<?= $this->data->page ?>">EN</a> / DE
            <?php endif; ?>
        </strong>
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-29009163-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
