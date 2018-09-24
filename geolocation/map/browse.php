<?php
queue_css_file('geolocation-items-map');
$title = __('Browse Items on the Map') . ' ' . __('(%s total)', $totalItems);
echo head(array('title' => $title, 'bodyclass' => 'map browse'));
?>

<!-- Page Content -->
<div class="container">
    <div class="row row-flow">
        <div class="col-lg-12">
            <h1 class="my-4"><?php echo $title; ?></h1>

            <?php
            echo pagination_links();
            ?>

            <div id="geolocation-browse">
                <?php echo $this->geolocationMapBrowse('map_browse', array('list' => 'map-links', 'params' => $params)); ?>
                <div id="map-links"><h2><?php echo __('Find An Item on the Map'); ?></h2></div>
            </div>
        </div>
    </div>
</div>

<?php echo foot(); ?>
