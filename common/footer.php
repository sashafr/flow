        <!-- Footer -->
        <footer class="footer py-2 bg-flow">
            <div class="container">
                <div class="m-0 text-center text-white">
                    <?php echo mh_footer_find_us(); ?>
                </div>
                <div class="m-0 text-center text-white"><?php echo get_theme_option('custom_footer_html');?></div>
            </div>
            <!-- /.container -->

            <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
        </footer>

    </body>

</html>
