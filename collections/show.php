<?php
$collectionTitle = metadata('collection', 'display_title');
$totalItems = metadata('collection', 'total_items');
?>
<?php echo head(array('title' => $collectionTitle, 'bodyclass' => 'collections show')); ?>



<!-- Page Content -->

<div class="ohTitle">
<?php
$pageTitle = "Oral Histories";
?>

<h1><?php echo $pageTitle;?></h1>
</div>









    <?php if ($collection->hasContributor()): ?>
    <div class="collection-contributors">
        <p>
        <strong><?php echo __('Contributors'); ?>:</strong>
        <?php echo metadata('collection', array('Dublin Core', 'Contributor'), array('all'=>true, 'delimiter'=>', ')); ?>
        </p>
    </div>
    <?php endif; ?>

    <p class="view-items-link"><?php echo link_to_items_browse(__('View the items in %s', metadata('collection', array('Dublin Core', 'Title'))), array('collection' => metadata('collection', 'id'))); ?></p>

    <?php fire_plugin_hook('public_collections_browse_each', array('view' => $this, 'collection' => $collection)); ?>

    </div>

</div><!-- end class="collection" -->



<?php echo pagination_links(); ?>


<section class="team">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <div class="row pt-md">
            <div class="col-lg-4 col-lg-4 col-lg-4 col-md-12">
              <div class="img-box">

                <div class="collection record">

                    <?php if ($collectionImage = record_image('collection')): ?>
                        <?php echo link_to_collection($collectionImage, array('class' => 'image')); ?>
                    <?php endif; ?>
                  </div>




                <img src=" " class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1><?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
              <div class="collection-description">
                  <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
              </div>
              <?php endif; ?>
            </h1>
              <h1>Margie & Nancy Cobb</h1>
              <h2>Eastwick Oral History Project</h2>
              <p>Eastwick is at the end of the line. But I had some great friends...</p>
            </div>
            </div>
            <!-- /.row -->

          </div>
          </div>
          </div>
          </div>



          <?php
          $sortLinks[__('Title')] = 'Dublin Core,Title';
          $sortLinks[__('Date Added')] = 'added';
          ?>
          <div id="sort-links">
              <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
          </div>
          <!-- /.container -->
          <?php echo foot(); ?>
