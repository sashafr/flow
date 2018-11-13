<?php echo head(array('bodyid'=>'home')); ?>

<!-- Sidebar -->
<section id="sidebar">
    <div class="inner">
        <?php if(get_theme_option('lg_logo')): ?>
            <div class="flow-sidebar-logo">
                <a href='#'class='image'><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('lg_logo'); ?>" style="width:100%;height:100%;" align="center"></a>
            </div>
        <?php endif; ?>
        <nav>
            <ul>
                <li><a href="#intro">Home</a></li>
                <?php if(get_theme_option('home_block_1_title')): ?>
                    <li><a href="#one"><?php echo get_theme_option('home_block_1_title') ?></a></li>
                <?php endif; ?>
                <?php if(get_theme_option('home_block_2_title')): ?>
                    <li><a href="#two"><?php echo get_theme_option('home_block_2_title') ?></a></li>
                <?php endif; ?>
                <?php if(get_theme_option('home_block_3_title')): ?>
                    <li><a href="#three"><?php echo get_theme_option('home_block_3_title') ?></a></li>
                <?php endif; ?>
                <?php if(get_theme_option('home_block_4_title')): ?>
                    <li><a href="#four"><?php echo get_theme_option('home_block_4_title') ?></a></li>
                <?php endif; ?>
                <?php if(get_theme_option('home_block_5_title')): ?>
                    <li><a href="#five"><?php echo get_theme_option('home_block_5_title') ?></a></li>
                <?php endif; ?>
                <?php if(get_theme_option('home_block_6_title')): ?>
                    <li><a href="#six"><?php echo get_theme_option('home_block_6_title') ?></a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Intro -->
    <section id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1><?php echo option('site_title') ?></h1>
            <?php if(get_theme_option('header_image')): ?>
                <div>
                    <img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('header_image'); ?>" style="width:100%;height:auto;" align="center">
                </div>
            <?php endif; ?>
            <?php if(get_theme_option('about')): ?>
                <p><?php echo get_theme_option('about') ?></p>
            <?php endif ?>
        </div>
    </section>
    <section id="one" class="wrapper style2 spotlights">
        <?php if(get_theme_option('home_block_1_title')): ?>
            <!-- One -->
            <section>
                <?php if(get_theme_option('home_block_1_image')): ?>
                    <a class="image"><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_block_1_image'); ?>" alt="" data-position="top center" /></a>
                <?php endif; ?>
                <div class="content">
                    <div class="inner">
                        <h2><?php echo get_theme_option('home_block_1_title') ?></h2>
                        <p><?php echo get_theme_option('home_block_1_text') ?></p>
                        <?php if(get_theme_option('home_block_1_link')): ?>
                            <ul class="actions">
                                <li><a href="<?php echo get_theme_option('home_block_1_link') ?>" class="button">Learn more</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(get_theme_option('home_block_2_title')): ?>
            <!-- Two -->
            <section id="two" class="wrapper style2 spotlights">
                <?php if(get_theme_option('home_block_2_image')): ?>
                    <a class="image"><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_block_2_image'); ?>" alt="" data-position="top center" /></a>
                <?php endif; ?>
                <div class="content">
                    <div class="inner">
                        <h2><?php echo get_theme_option('home_block_2_title') ?></h2>
                        <p><?php echo get_theme_option('home_block_2_text') ?></p>
                        <?php if(get_theme_option('home_block_2_link')): ?>
                            <ul class="actions">
                                <li><a href="<?php echo get_theme_option('home_block_2_link') ?>" class="button">Learn more</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(get_theme_option('home_block_3_title')): ?>
            <!-- Three -->
            <section id="three" class="wrapper style2 spotlights">
                <?php if(get_theme_option('home_block_3_image')): ?>
                    <a class="image"><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_block_3_image'); ?>" alt="" data-position="25% 25%" /></a>
                <?php endif; ?>
                <div class="content">
                    <div class="inner">
                        <h2><?php echo get_theme_option('home_block_3_title') ?></h2>
                        <p><?php echo get_theme_option('home_block_3_text') ?></p>
                        <?php if(get_theme_option('home_block_3_link')): ?>
                            <ul class="actions">
                                <li><a href="<?php echo get_theme_option('home_block_3_link') ?>" class="button">Learn more</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </section>

    <section id="four" class="wrapper style2 spotlights">

        <?php if(get_theme_option('home_block_4_title')): ?>
            <!-- Four -->
            <section>
                <?php if(get_theme_option('home_block_4_image')): ?>
                    <a class="image"><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_block_4_image'); ?>" alt="" data-position="center center" /></a>
                <?php endif; ?>
                <div class="content">
                    <div class="inner">
                        <h2><?php echo get_theme_option('home_block_4_title') ?></h2>
                        <p><?php echo get_theme_option('home_block_4_text') ?></p>
                        <?php if(get_theme_option('home_block_4_link')): ?>
                            <ul class="actions">
                                <li><a href="<?php echo get_theme_option('home_block_4_link') ?>" class="button">Learn more</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(get_theme_option('home_block_5_title')): ?>
            <!-- Five -->
            <section id="five" class="wrapper style2 spotlights">
                <?php if(get_theme_option('home_block_5_image')): ?>
                    <a class="image"><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_block_5_image'); ?>" alt="" data-position="top center" /></a>
                <?php endif; ?>
                <div class="content">
                    <div class="inner">
                        <h2><?php echo get_theme_option('home_block_5_title') ?></h2>
                        <p><?php echo get_theme_option('home_block_5_text') ?></p>
                        <?php if(get_theme_option('home_block_5_link')): ?>
                            <ul class="actions">
                                <li><a href="<?php echo get_theme_option('home_block_5_link') ?>" class="button">Learn more</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if(get_theme_option('home_block_6_title')): ?>
            <!-- Six -->
            <section id="six" class="wrapper style2 spotlights">
                <?php if(get_theme_option('home_block_6_image')): ?>
                    <a class="image"><img src="<?php echo WEB_ROOT.'/files/theme_uploads/'.get_theme_option('home_block_6_image'); ?>" alt="" data-position="top center" /></a>
                <?php endif; ?>
                <div class="content">
                    <div class="inner">
                        <h2><?php echo get_theme_option('home_block_6_title') ?></h2>
                        <p><?php echo get_theme_option('home_block_6_text') ?></p>
                        <?php if(get_theme_option('home_block_6_link')): ?>
                            <ul class="actions">
                                <li><a href="<?php echo get_theme_option('home_block_6_link') ?>" class="button">Learn more</a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </section>
</div> <!-- End Primary Column -->

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>


<?php echo head(array('bodyid'=>'home', 'context' => 'home')); ?>


<!-- Footer -->
<footer id="footer" class="wrapper style1-alt">
    <div class="inner">
        <ul class="menu">
            <li><?php echo get_theme_option('custom_footer_html');?></li>
        </ul>
    </div>
</footer>

</body>
