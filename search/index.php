<?php
$pageTitle = __('Search') . ' ' . __('(%s total)', $total_results);
echo head(array('title' => $pageTitle, 'bodyclass' => 'search'));
$searchRecordTypes = get_search_record_types();
?>

<!-- Page Content -->

    <div class="row row-flow">

        <div class="col-lg-8">

            <h1 class="my-4"><?php echo $pageTitle;?></h1>

            <!-- Items -->

            <?php foreach (loop('search_texts') as $searchText): ?>
                <?php $record = get_record_by_id($searchText['record_type'], $searchText['record_id']); ?>
                <?php $recordType = $searchText['record_type']; ?>
                <?php set_current_record($recordType, $record); ?>
                <div class="card mb-4">
                    <?php if ($itemImage = record_image($record, 'original', array('class' => 'card-img-top'))): ?>
                        <div class="image-container-flow">
                            <?php echo $itemImage; ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo metadata($record, array('Dublin Core', 'Title')) ?></h2>
                        <?php $desc = strip_tags(htmlspecialchars_decode(metadata($record, array('Dublin Core', 'Description')))); ?>
                        <p class="card-text"><?php echo snippet($desc,0,250) ?></p>
                        <?php echo link_to_item("Read More &rarr;",array('class'=>'btn btn-primary')); ?>
                    </div>
                </div>

            <?php endforeach ?>

            <?php echo pagination_links(); ?>

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

        </div>

    </div>
    <!-- /.row -->



<?php echo foot(); ?>
