<?php echo head(array(
  'title' => nl_getExhibitField('title'),
  'bodyclass' => 'neatline show'
)); ?>

<div class="container">
  <div class="row row-flow">
    <div class="col-lg-8">

<!-- Exhibit title: -->
<h1><?php echo nl_getExhibitField('title'); ?></h1>

<!-- Link to accessible alternative representation -->
<?php echo nl_getExhibitAccessibleURL(null, __('Accessible Alternative')); ?>

<!-- "View Fullscreen" link: -->
<?php echo nl_getExhibitLink(
  null, 'fullscreen', __('View Fullscreen'), array('class' => 'nl-fullscreen')
); ?>

<!-- Exhibit and description : -->
<?php echo nl_getExhibitMarkup(); ?>
<?php echo nl_getNarrativeMarkup(); ?>

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
