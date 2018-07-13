<?php
$title = __('Browse Items on the Map');
echo head(array('title' => $title, 'bodyclass' => 'map browse'));
?>

<!-- Page Content -->
<div class="container">
  <div class="row row-flow">
    <div class="col-lg-8">
      <h1 class="my-4"><?php echo $title; ?> <?php echo __('(%s total)'); ?></h1>

      <nav class="items-nav navigation secondary-nav">
        <?php echo public_nav_items(); ?>
      </nav>

      <?php
      echo item_search_filters();
      echo pagination_links();
      ?>

      <div id="geolocation-browse">
        <?php echo $this->geolocationMapBrowse('map_browse', array('list' => 'map-links', 'params' => $params)); ?>
      </div>
    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-lg-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <?php echo search_form(); ?>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
        </div>

    </div>
  </div>
</div>

<?php echo foot(); ?>
