<?php
$pageTitle = __('Browse Collections');
echo head(array('title'=>$pageTitle,'bodyclass' => 'collections browse'));
?>

<!-- Page Content -->
<h1 class="my-4"><?php echo $pageTitle; ?> <?php echo __('(%s total)', $total_results); ?></h1>

<!-- Items -->
<?php foreach (loop('collections') as $collection): ?>
    <div class="card mb-4">
        <?php if ($itemImage = record_image($collection, 'original', array('class' => 'card-img-top'))): ?>
            <div class="image-container-flow">
                <?php echo $itemImage; ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <h2 class="card-title"><?php echo metadata($collection, array('Dublin Core', 'Title')) ?></h2>
            <?php $desc = strip_tags(htmlspecialchars_decode(metadata($collection, array('Dublin Core', 'Description')))); ?>
            <p class="card-text"><?php echo snippet($desc,0,250) ?></p>
            <?php echo link_to_collection("Read More &rarr;",array('class'=>'btn btn-primary')); ?>
        </div>
    </div>

<?php endforeach ?>

<?php echo pagination_links(); ?>

<?php echo foot(); ?>
