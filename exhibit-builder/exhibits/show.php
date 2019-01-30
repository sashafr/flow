<?php
echo head(array(
    'title' => metadata('exhibit_page', 'title') . ' &middot; ' . metadata('exhibit', 'title'),
    'bodyclass' => 'exhibits show'));
?>

<!-- Page Content -->

   <div class="row row-flow-double">

       <!-- Post Content Column -->
       <div class="col-lg-8">

            <h1 class="flow-exhibit-title"><span class="exhibit-page"><?php echo metadata('exhibit_page', 'title'); ?></h1>

            <div id="exhibit-blocks">
                <?php exhibit_builder_render_exhibit_page(); ?>
            </div>

            <div id="exhibit-page-navigation">
                <?php if ($prevLink = exhibit_builder_link_to_previous_page()): ?>
                <div id="exhibit-nav-prev">
                <?php echo $prevLink; ?>
                </div>
                <?php endif; ?>
                <?php if ($nextLink = exhibit_builder_link_to_next_page()): ?>
                <div id="exhibit-nav-next">
                <?php echo $nextLink; ?>
                </div>
                <?php endif; ?>
                <div id="exhibit-nav-up">
                <?php echo exhibit_builder_page_trail(); ?>
                </div>
            </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-lg-4">
            <div class="card">
                <h5 class="card-header"><?php echo exhibit_builder_link_to_exhibit($exhibit); ?></h5>
                <div class="card-body flow-exhibit-pages">
                    <?php echo exhibit_builder_page_tree($exhibit, $exhibit_page); ?>
                </div>
            </div>
        </div>

    </div>

<?php echo foot(); ?>
