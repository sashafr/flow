<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>

<!-- Page Content -->
<div class="container">
  <div class="row row-flow">
    <div class="col-lg-8">
      <h1 class="my-4"><?php echo $title; ?> <?php echo __('(%s total)', $total_results); ?></h1>

      <!-- Exhibits -->
      <?php if (count($exhibits) > 0): ?>
        <nav class="navigation secondary-nav">
          <?php echo nav(array(
            array(
              'label' => __('Browse All'),
              'uri' => url('exhibits')
            ),
            array(
              'label' => __('Browse by Tag'),
              'uri' => url('exhibits/tags')
            )
          )); ?>
        </nav>
        <?php echo pagination_links(); ?>

        <div class="records">
          <?php $exhibitCount = 0; ?>
          <?php foreach (loop('exhibit') as $exhibit): ?>
            <?php $exhibitCount++; ?>

            <div class="exhibit hentry <?php if ($exhibitCount%2==1) echo ' even'; else echo ' odd'; ?>">
              <?php if ($exhibitImage = record_image($exhibit, 'thumbnail')): ?>
                <?php echo exhibit_builder_link_to_exhibit($exhibit, $exhibitImage, array('class' => 'image')); ?>
              <?php endif; ?>
              <h2><?php echo link_to_exhibit(); ?></h2>

            <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
            <div class="description"><?php echo $exhibitDescription; ?></div>
            <?php endif; ?>

            <?php if ($exhibitTags = tag_string('exhibit', 'exhibits')): ?>
            <p class="tags"><?php echo $exhibitTags; ?></p>
            <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
    <?php echo pagination_links(); ?>

  <?php else: ?>
    <p><?php echo __('There are no exhibits available yet.'); ?></p>
  <?php endif; ?>
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
