<?php echo head(); ?>

<!-- Page Content -->
<div class="container">
    <div class="row row-flow">
        <div class="col-lg-12">

            <?php if (!$is_home_page): ?>
                <h1 class="my-4"><?php echo metadata('simple_pages_page', 'title'); ?></h1>
            <?php endif; ?>
            <?php
            $text = metadata('simple_pages_page', 'text', array('no_escape' => true));
            echo $this->shortcodes($text);
            ?>

        </div>
    </div>
</div>

<?php echo foot(); ?>
