
<!-- NEED TO 1.MAKE IMAGE LARGER 2. ADD TEXT FROM DATATABLE 3.LINK THE PDF -->


<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')), 'bodyclass' => 'items show')); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <p class="headshot">
                <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>
            </p>

            <!-- Author -->
            <p class="lead">
                by
                <a class="element-text"><?php echo link_to_collection_for_item(); ?></a>
            </p>

            <hr>
            <!-- Preview Image -->
            <div id="item-images">
                <?php if (count($item->getFiles()) > 0): ?>
                    <?php set_loop_records('allfiles', $item->getFiles());
                          $nopdfs = array() ?>
                    <?php foreach (loop('allfiles') as $singlefile):?>
                        <?php if ($singlefile->mime_type != 'application/pdf'): ?>
                            <?php array_push($nopdfs, $singlefile); ?>
                        <?php endif; ?>
                    <?php endforeach;?>
                    <?php echo file_markup($nopdfs); ?>
                <?php endif; ?>

            </div>


            <!-- Post Content -->
                <!-- Insert Story clip -->
                <?php if(metadata('item','Collection Name')): ?>
                    <div id="collection" class="element">
                        <h3><?php echo __('Their Story'); ?></h3>

                    </div>
                <?php endif; ?>


                <blockquote class="blockquote">
                    <p class="mb-0">"And coming out to Elmwood- what was so amazing was that you had so much green space. And what I recall is my mom raising chickens and we had a grape vine and she would make wine. And the in the back of us there were empty lots so she had the soil turned over and she planted vegetables every year. So your neighbors – you would really just walk, we didn’t have sidewalks, you would walk in the streets, and we had one neighbor who had a horse, and other kinds of farm animals out there. So it was really a very tranquil nice area. But what I found out is that people that lived in the big city would consider us different. And I guess we were. But they always used derogative terms, like, “Oh, you live in the swamp,” and we were always at the end of the line. Eastwick is at the end of the line. But I had some great friends, I enjoyed our playtime. Neighbors were truly neighbors then – everybody knew everybody. So. It was great."</p>
                    <footer class="blockquote-footer">Margie Cobb
                        <cite title="Source Title"></cite>
                    </footer>
                </blockquote>
                <!-- View full transcript -->

                <div>
                    <?php if (count($item->getFiles()) > 0): ?>
                        <?php set_loop_records('allfiles', $item->getFiles()); ?>
                        <?php foreach (loop('allfiles') as $singlefile):?>
                            <?php if ($singlefile->mime_type == 'application/pdf'): ?>
                                <a class="btn btn-default" href="<?php echo file_display_url($singlefile, 'original') ?>" role="button">Read More (See Full Transcript)</a>
                            <?php endif; ?>
                        <?php endforeach;?>
                    <?php endif; ?>
                </div>


                <!-- Insert Citation -->
                <div id="item-citation" class="element">
                    <h3><?php echo __('Citation'); ?></h3>
                    <div class="element-text"><?php echo metadata('item','citation',array('no_escape'=>true)); ?></div>
                </div>
                <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>



                <div class="item-pagination navigation">
                    <a id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></a>
                    <div id="next-item" class="next"><?php echo link_to_next_item_show(); ?></div>
                </div>

                <!-- Geolocation -->
                <p class="lead"></p>
                <hr>
            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>


                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Sponsored by:</h5>
                    <ul>
                        <li>
                          <a href="https://eastwickfriends.wordpress.com/">Eastwick Friends and Neighbors Coalition</a>
                          </li>
                        <li>
                          <a href="http://www.ppehlab.org/">Penn Program in Environmental Humanities</a>
                        </li>



                    </ul>

                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                      <a class="element-text"><?php echo link_to_collection_for_item(); ?></a>
                                    </li>
                                    <li>
                                        <a href="#">Take a Tour</a>
                                    </li>
                                    <li>
                                        <a href="#">Collections</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Maps</a>
                                    </li>
                                    <li>
                                        <a href="#">Login</a>
                                    </li>
                                    <li>
                                        <a href="#">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- /.row -->

        </div>

        <!-- /.container -->

        <?php echo foot(); ?>
