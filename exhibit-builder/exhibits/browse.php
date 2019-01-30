<?php
$title = __('Browse Exhibits');
echo head(array('title' => $title, 'bodyclass' => 'exhibits browse'));
?>

<!-- Page Content -->
<h1 class="my-4"><?php echo $title; ?> <?php echo __('(%s total)', $total_results); ?></h1>

<!-- Exhibits -->
<?php if (count($exhibits) > 0): ?>

    <div class="records">
        <?php foreach (loop('exhibit') as $exhibit): ?>
            <div class="card mb-4">
                <?php if ($exhibitImage = record_image($exhibit, 'original', array('class' => 'card-img-top'))): ?>
                    <div class="image-container-flow">
                        <?php echo $exhibitImage; ?>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h2 class="card-title"><?php echo metadata('exhibit', 'title') ?></h2>
                    <?php $desc = strip_tags(htmlspecialchars_decode(metadata('exhibit', 'description'))); ?>
                    <p class="card-text"><?php echo snippet($desc,0,250) ?></p>
                    <?php echo link_to_exhibit("Read More &rarr;",array('class'=>'btn btn-primary')); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php echo pagination_links(); ?>

<?php else: ?>
    <p><?php echo __('There are no exhibits available yet.'); ?></p>
<?php endif; ?>

<?php echo foot(); ?>
