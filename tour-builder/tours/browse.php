<?php
$label=mh_tour_label('plural');
echo head( array(
	'maptype'=>'none',
	'title' => $label,
	'bodyid'=>'tours',
    'bodyclass' => 'browse',
    'context'=>'standard' )
    );
?>

<!-- Page Content -->
<div class="container">
    <div class="row row-flow">

        <!-- Blog Entries Column -->
        <div class="col-lg-8">

            <h1 class="my-4"><?php echo __('All %1$s: %2$s', $label, total_tours());?></h1>

            <!-- Tour -->

            <?php set_loop_records("tours", get_records("Tour")); ?>
            <?php foreach (loop("tours") as $tour): ?>
                <?php set_current_record( 'tour', $tour );
                    $tourTitle = strip_formatting( tour( 'title' ) );
                    if( $tourTitle == '') {
                        $tourTitle = '[Untitled]';
                    }
                    $tourdesc = strip_tags( htmlspecialchars_decode(tour( 'description' )) );
                ?>

                <?php $tourItem = $tour->getItems()[0] ?>
                <div class="card mb-4">
                    <?php if ($itemImage = record_image($tourItem, 'original', array('class' => 'card-img-top'))): ?>
                        <div class="image-container-flow">
                            <?php echo $itemImage; ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $tourTitle ?></h2>
                        <p class="card-text"><?php echo snippet($tourdesc,0,250) ?></p>
                        <?php echo link_to_tour("Take the Tour &rarr;",array('class'=>'btn btn-primary')); ?>

                    </div>
                    <?php if(tour( 'Credits' )): ?>
                        <div class="card-footer text-muted">
                            by <?php echo tour( 'Credits' ); ?>
                        </div>
                    <?php elseif(get_theme_option('show_author') == true): ?>
                        <div class="card-footer text-muted">
                            by The <?php echo option('site_title'); ?> Team
                        </div>
                    <?php endif ?>
                </div>

            <?php endforeach ?>

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
    <!-- /.row -->

</div>
<!-- /.container -->

<?php echo foot(); ?>
