<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_token() ?>" />

    <meta name="robots" content="<?= $seo->follow ?? null ?>">
    <title><?= ucwords(app_name()) . " | " . (!empty($seo->title) ? ("" . $seo->title) : null) ?></title>
    <meta name="description" content="<?= $seo->description ?? null ?>">
    <link rel="canonical" href="<?= $seo->url ?? null ?>" />
    <link rel="shortcut icon" href="<?= asset("favicon.ico") ?>" type="image/x-icon">

    <?php

    $styles = [
        "front/custom.css",
        "bootstrap-icons.css"
    ];

    foreach ($styles as $style) {
        echo "<link rel='stylesheet' href='" . asset("css/{$style}") . "'>\n";
    }

    ?>

    <?= $v->section("styles") ?>
</head>

<body style="background-image: url(<?= url("/shared/images/front/background_01.svg") ?>);">
    <header class="header">
        <div class="container">
            <a class="header-brand" href="<?= $router->route("fron.front") ?>" title="<?= $siteSettings->name ?>">
                <?php if ($siteSettings->logo) : ?>
                    <h1 class="sr-only"><?= $siteSettings->name ?></h1>
                    <img src="<?= url("/shared" . $siteSettings->logo) ?>" alt="<?= $siteSettings->name ?>">
                <?php else : ?>
                    <h1><?= $siteSettings->name ?></h1>
                <?php endif; ?>
            </a>

            <button class="btn bg-transparent <?= icon_class("menu") ?> d-lg-none ml-auto btn-mobile-menu"></button>

            <div class="header-nav d-none d-lg-flex">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $router->route("fron.front") ?>">
                            Início
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Comprar
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Contato
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">
                            Sobre
                        </a>
                    </li>
                </ul>

                <div class="ml-4">
                    <button class="btn btn-primary">
                        Minha Conta
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="message-area">
                <?php if ($flash = message_flash()) {
                    echo $flash->render();
                } ?>
            </div>
        </div>

        <?= $v->section("content") ?>
    </main>

    <footer class="footer">
        <div class="container"></div>
    </footer>

    <?php

    $scripts = [
        "jquery.min.js",
        "jquery-ui.min.js",
        "bootstrap.min.js",
        "global-scripts.js",
        "headerplugin.js",
        "front/scripts.js",
    ];

    foreach ($scripts as $script) {
        echo "<script src='" . asset("js/{$script}") . "'></script>\n";
    }

    ?>
    <script>
        $(".header").monitore(".main", {
            class: "fixed-header-navbar"
        });
    </script>
    <?= $v->section("scripts") ?>

</body>

</html>