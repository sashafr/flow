<!DOCTYPE html>
<html lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <?php if ( $description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php
    $title = (isset($title)) ? $title : null;
    $item = (isset($item)) ? $item : null;
    $tour = (isset($tour)) ? $tour : null;
    $file = (isset($file)) ? $file : null;
    ?>

    <script>
    /*!
    loadJS: load a JS file asynchronously.
    [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish).
    Licensed MIT
    */
    function loadJS(src,cb){"use strict";var ref=window.document.getElementsByTagName("script")[0];var script=window.document.createElement("script");script.src=src;script.async=true;ref.parentNode.insertBefore(script,ref);if(cb&&typeof(cb)==="function"){script.onload=cb;}
    return script;}

    /*!
    loadCSS: load a CSS file asynchronously.
    [c]2014 @scottjehl, Filament Group, Inc.
    Licensed MIT
    */
    function loadCSS(href,before,media){"use strict";var ss=window.document.createElement("link");var ref=before||window.document.getElementsByTagName("script")[0];var sheets=window.document.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";ref.parentNode.insertBefore(ss,ref);function toggleMedia(){var defined;for(var i=0;i<sheets.length;i++){if(sheets[i].href&&sheets[i].href.indexOf(href)>-1){defined=true;}}
    if(defined){ss.media=media||"all";}
    else{setTimeout(toggleMedia);}}
    toggleMedia();return ss;}
    </script>

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Using different stylesheets for home page v. all other pages -->
    <?php if (is_current_url(url('/'))): ?>
        <?php queue_css_file(array('hyperspace')); ?>
        <?php queue_js_url('themes/flow/javascripts/hyperspace/breakpoints.min.js'); ?>
        <?php queue_js_url('themes/flow/javascripts/hyperspace/browser.min.js'); ?>
        <?php queue_js_url('themes/flow/javascripts/hyperspace/jquery.scrollex.min.js'); ?>
        <?php queue_js_url('themes/flow/javascripts/hyperspace/jquery.scrolly.min.js'); ?>
        <?php queue_js_url('themes/flow/javascripts/hyperspace/main.js'); ?>
        <?php queue_js_url('themes/flow/javascripts/hyperspace/util.js'); ?>
    <?php else: ?>
        <?php queue_css_file(array('flow')); ?>
        <?php queue_css_url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css'); ?>
        <script>
        // Async CSS
        loadCSS('<?php echo src('font-awesome/css/font-awesome.min.css','fonts');?>'); // font awesome css
        loadCSS('<?php echo src('photoswipe/dist/photoswipe.all.min.css','javascripts');?>'); // photoswipe css
        <?php if( 0 === strpos(current_url(), '/items/show') ):?>
        loadJS('<?php echo src('items-show.js','javascripts');?>'); // items-show.js
        <?php endif;?>
        </script>
    <?php endif ?>

    <!-- Stylesheets -->
    <?php
    queue_css_file(array('jqcloud', 'geolocation-items-map'));
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php
    queue_js_url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    queue_js_url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
    queue_js_file(array('wordFreq', 'jqcloud', 'contribution-public-form'));
    echo head_js();
    ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
<?php fire_plugin_hook('public_body', array('view'=>$this)); ?>

<!-- Navigation -->
<?php if (!is_current_url(url('/'))): ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-flow fixed-top">
        <div class="container">
            <?php echo link_to_home_page(option('display_option_site_title'), array("class" => "navbar-brand")); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <?php echo public_nav_main()->setUlClass("navbar-nav ml-auto")->setActiveClass("active"); ?>
            </div>
        </div>
    </nav>
<?php else: ?>
<?php endif ?>
