<?php
$maptype='tour';
$tourTitle = strip_formatting( tour( 'title' ) );
$label = mh_tour_label();
if( $tourTitle != '' && $tourTitle != '[Untitled]' ) {
} else {
    $tourTitle = '';
}
echo head( array( 'maptype'=>$maptype,'title' => ''.$label.' | '.$tourTitle, 'content_class' => 'horizontal-nav', 'bodyid'=>'tours',
'bodyclass' => 'show tour', 'tour'=>$tour, 'context'=>'standard' ) );
?>

<!-- Page Content -->

    <div class="row row-flow">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $tourTitle; ?></h1>

            <!-- Author -->
            <?php $byline=null;
            if(tour( 'Credits' )){
                $byline.= '<span class="tour-meta">'.__(' %s',tour( 'Credits' )).'</span>';
            }elseif(get_theme_option('show_author') == true){
                $byline.= '<span class="tour-meta">'.__(' The %s Team',option('site_title')).'</span>';
            }
            ?>

            <p class="lead">
                by <?php echo $byline ?>
            </p>

            <hr>

            <!-- Preview Image -->
            <section class="map">
                <figure>
                    <?php echo mh_map_type($maptype,null,$tour); ?>
                    <?php echo mh_map_actions(null,$tour);?>
                </figure>
            </section>

            <hr>

            <!-- Post Content -->
            <div class="lead">
                <?php echo htmlspecialchars_decode(nls2p( tour( 'Description' ) )); ?>
            </div>

            <hr>

            <section id="tour-items">

                <h3 ><?php echo __('Locations for %s', $label);?></h3>
                <?php
                $i=1;
                foreach( $tour->getItems() as $tourItem ):
                    if($tourItem->public):
                        set_current_record( 'item', $tourItem );
                        $itemID=$tourItem->id;
                        $hasImage=metadata($tourItem,'has thumbnail');
                        ?>
                        <div class="tour-item-container flex">
                            <div class="tour-route flex flex-column" aria-hidden="true">
                                <div class="tour-route-number"><?php echo $i;?> </div>
                                <div class="tour-route-path"></div>
                            </div>
                            <article class="item-result <?php echo $hasImage ? 'has-image' : null;?>">
                                <h3><a href="<?php echo url('/') ?>items/show/<?php echo $itemID.'?tour='.tour( 'id' ).'&index='.($i-1).''; ?>">
                                    <?php echo metadata( $tourItem, array('Dublin Core', 'Title') ); ?>
                                </a></h3>

                                <div class="item-description"><?php echo snippet(mh_the_text($tourItem),0,250); ?></div>
                            </article>
                        </div>
                        <?php
                        $i++;
                        $item_image=null;
                    endif;
                endforeach; ?>
            </section>

            <hr>

            <section id="tour-postscript">
                <?php echo htmlspecialchars_decode(metadata('tour','Postscript Text')); ?>
            </section>

            <div class="comments">
                <?php echo (get_theme_option('tour_comments') ==1) ? mh_display_comments() : null;?>
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

            <!-- Tours Widget -->
            <div class="card my-4">
                <h5 class="card-header">Tours</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled mb-0">
                                <?php set_loop_records("tours", get_records("Tour")); ?>
                                <?php foreach (loop("tours") as $otherTour): ?>
                                    <?php set_current_record( 'tour', $otherTour ); ?>
                                    <li>
                                        <?php echo link_to_tour(null,array('class'=>'permalink')); ?>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->


<?php echo foot(); ?>
