<?php
$pageTitle = __('Browse Items');
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<!-- Page Content -->
<div class="container">

    <div class="row row-flow">

        <div class="col-lg-12">

            <h1 class="my-4"><?php echo $pageTitle;?> <?php echo __('(%s total)', $total_results); ?></h1>

            <!-- Items -->

            <?php foreach (loop('items') as $item): ?>
                <div class="card mb-4">
                    <?php if ($itemImage = record_image($item, 'original', array('class' => 'card-img-top'))): ?>
                        <div class="image-container-flow">
                            <?php echo $itemImage; ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo metadata($item, array('Dublin Core', 'Title')) ?></h2>
                        <?php $desc = strip_tags(htmlspecialchars_decode(metadata($item, array('Dublin Core', 'Description')))); ?>
                        <p class="card-text"><?php echo snippet($desc,0,250) ?></p>
                        <?php echo link_to_item("Read More &rarr;",array('class'=>'btn btn-primary')); ?>
                    </div>
                </div>

            <?php endforeach ?>

            <?php echo pagination_links(); ?>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php echo foot(); ?>
