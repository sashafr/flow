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

    <!-- Plugin Stuff -->
    <?php fire_plugin_hook('public_head', array('view'=>$this)); ?>

    <!-- Stylesheets -->
    <?php
    queue_css_url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    queue_css_file(array('style'));
    echo head_css();
    ?>

    <!-- JavaScripts -->
    <?php
    queue_js_url('https://code.jquery.com/jquery-3.3.1.slim.min.js');
    queue_js_url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    queue_js_url('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
    echo head_js();
    ?>
</head>

<?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="http://165.227.208.93/river/">Schuylkill River & Urban Waters Research Corps Archive</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://165.227.208.93/river/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Take a Tour</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://204.48.26.187/oralhistories/home">Browse Collections</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Map</a>

            <li class="nav-item">
                <a class="nav-link" href="#">Contribute</a>

            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>

            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
