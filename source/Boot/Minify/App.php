<?php
if (strpos(url(), "localhost") !== false) {
    /**
     * CSS
     */
    $minCSS = new MatthiasMullie\Minify\CSS();
    $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/fontawesome-free/css/all.min.css");
    $minCSS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/overlayScrollbars/css/OverlayScrollbars.min.css");

    //theme CSS
    $cssDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/assets/css");
    foreach ($cssDir as $css) {
        $cssFile = __DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/assets/css/{$css}";
        if (is_file($cssFile) && pathinfo($cssFile)['extension'] == "css") {
            $minCSS->add($cssFile);
        }
    }

    //Minify CSS
    $minCSS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/assets/style.css");

    /**
     * JS
     */
    $minJS = new MatthiasMullie\Minify\JS();
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/jquery/jquery.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/bootstrap/js/bootstrap.bundle.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/jquery-mousewheel/jquery.mousewheel.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/raphael/raphael.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/jquery-mapael/jquery.mapael.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/jquery-mapael/maps/usa_states.min.js");
    $minJS->add(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/plugins/chart.js/Chart.min.js");

    //theme CSS
    $jsDir = scandir(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/assets/js");
    foreach ($jsDir as $js) {
        $jsFile = __DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/assets/js/{$js}";
        if (is_file($jsFile) && pathinfo($jsFile)['extension'] == "js") {
            $minJS->add($jsFile);
        }
    }

    //Minify JS
    $minJS->minify(__DIR__ . "/../../../themes/" . CONF_VIEW_APP . "/assets/scripts.js");
}