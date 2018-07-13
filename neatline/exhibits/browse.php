<?php
$title = __('Neatline | Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'neatline'));
?>

<!-- Page Content -->
<div class="container">
  <div class="row row-flow">
    <div class="col-lg-8">
      <h1 class="my-4"><?php echo $title; ?> <?php echo __('(%s total)', $total_results); ?></h1>

        <!-- Neatline Exhibits -->
        <?php echo flash(); ?>

        <?php if (nl_exhibitsHaveBeenCreated()): ?>
          <div class="pagination"><?php echo pagination_links(); ?></div>
          <?php foreach (loop('NeatlineExhibit') as $e): ?>

            <h2>
              <?php echo nl_getExhibitLink(
                $e, 'show', nl_getExhibitField('title'),
                array('class' => 'neatline'), true
              );?>
            </h2>

          <?php endforeach; ?>
          <div class="pagination"><?php echo pagination_links(); ?></div>
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
</div>

<?php echo foot(); ?>
