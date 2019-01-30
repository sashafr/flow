<?php echo head(array('title' => metadata('exhibit', 'title'), 'bodyclass'=>'exhibits summary')); ?>

<!-- Page Content -->

    <div class="row row-flow-double">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <div class="card mb-4">
                <?php if ($exhibitImage = record_image($exhibit, 'original', array('class' => 'card-img-top'))): ?>
                    <div class="image-container-flow">
                        <?php echo $exhibitImage; ?>
                    </div>
                <?php endif; ?>
                <div class="card-body">
                    <h2 class="card-title"><?php echo metadata('exhibit', 'title'); ?></h2>
                    <?php if ($exhibitDescription = metadata('exhibit', 'description', array('no_escape' => true))): ?>
                        <p class="card-text"><?php echo $exhibitDescription; ?></p>
                    <?php endif; ?>
                    <?php echo link_to_exhibit("Begin &rarr;", array('class'=>'btn btn-primary'), $exhibit->getFirstTopPage(), null); ?>
                </div>
                <?php if (($exhibitCredits = metadata('exhibit', 'credits'))): ?>
                    <div class="card-footer text-muted">
                        by <?php echo $exhibitCredits; ?>
                    </div>
                <?php endif ?>
            </div>
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-lg-4">
            <div class="card">
                <h5 class="card-header"><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h5>
                <div class="card-body flow-exhibit-pages">
                    <?php echo exhibit_builder_page_tree(); ?>
                </div>
            </div>
        </div>

    </div>

<?php echo foot(); ?>
