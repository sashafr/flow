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

                <?php
                $sortLinks[__('Title')] = 'Dublin Core,Title';
                $sortLinks[__('Date Added')] = 'added';
                ?>
                <div id="sort-links">
                    <span class="sort-label"><?php echo __('Sort by: '); ?></span><?php echo browse_sort_links($sortLinks); ?>
                </div>



                <div class="collection record">

                    <h2><?php echo link_to_collection(); ?></h2>

                    <?php if ($collectionImage = record_image('collection')): ?>
                        <?php echo link_to_collection($collectionImage, array('class' => 'image')); ?>
                    <?php endif; ?>

                    <div class="collection-meta">

                    <?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
                    <div class="collection-description">
                        <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
                    </div>
                    <?php endif; ?>

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




                <img src=" " class="img-responsive">
                <ul class="text-center">

                </ul>
              </div>
              <h1><?php if (metadata('collection', array('Dublin Core', 'Description'))): ?>
              <div class="collection-description">
                  <?php echo text_to_paragraphs(metadata('collection', array('Dublin Core', 'Description'), array('snippet'=>150))); ?>
              </div>
              <?php endif; ?>


            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>


                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Sort by:</h5>
                    <ul>
                      <?php
                      $sortLinks[__('Title')] = 'Dublin Core,Title';
                      $sortLinks[__('Date Added')] = 'added';
                      ?>
                      <div id="sort-links">
                          <span class="sort-label"></span><?php echo browse_sort_links($sortLinks); ?>
                      </div>
                    </ul>
                </div>
            </div>
            <!-- /.row -->

          </div>
          </div>
          </div>
          </div>
          <!-- /.row -->
</div>




          <!-- /.container -->
      <?php echo foot(); ?>
