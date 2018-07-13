<?php echo head(array('bodyid'=>'home', 'context' => 'home')); ?>

      <!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->

				<section id="intro" class="wrapper style1 fullscreen fade-up" style="background-image: url(files/theme_uploads/79bd9c95c51100ca3fc11c30345c7ed9.jpg);">
        <div class="inner flow-banner">
            <h1>Schuylkill River Archive</h1>
            <p color: #000066;>The Schuylkill Corps Archive is an interactive and growing public archive of citizen science and public humanities projects. Together we will discover and document the tidal river's past and present while collaboratively imagining it's future. Inside, you will find historical and present day scientific data, photographs and oral accounts, for a more inclusive and interdisciplinary narrative of the river and surrounding river wards. Explore citizen science data sets and related research. Browse through the collections to learn about Lower Schuylkill River ecology, the communities that live along its banks and the industrial history that has shaped it. Take a virtual tour or search locations of interest freely using our map. We encourage and appreciate your contributions.</p>
                <ul class="actions">
                    <li><a href="#about" class="button scrolly">Learn more</a></li>
                </ul>
            </div>
        </section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="http://schuylkillcorps.org/files/original/4f22645b02e2022c9b947dd3b9334597.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Welcome to the Schuylkill Corps</h2>
									<p>Founded in April 2016, the Schuylkill River and Urban Waters Corps is an informal collective of academic, non-profit, civic and community organizations. Based in Philadelphia, we are devoted to exploring and stewarding urban waters past and present. The Corps is currently fostering collaborations in other cities, including Mumbai and New York, and we are building a digital archive for our members' varied work: contributing, collecting, and curating oral histories; developing a variety of tours, both on-line and in-person; measuring air and water quality; and designing and building an array of citizen science and public humanities projects to discover and document the waters--and invite considerations of how they will exist in the future.</p>
								</div>
							</div>
						</section>

						<!-- Two -->
						<section id="two" class="wrapper style2 spotlights">
							<a href="#" class="image"><img src="http://schuylkillcorps.org/files/original/8982de7e02bddcabc0c6a534ac1c0974.jpeg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Take a Tour</h2>
									<p>Oil Refinery Tour: Tour curated by: Coryn Wolk, Clean Air Council, E.D.G.E (Encouraging Development of a Green Economy) | 9 Locations Tour of the industrial oil refining complex that runs along the Lower Schuylkill River. Philadelphia has a history with the oil industry that dates as far back as the 1860’s. With navigable waterways and early railroad infrastructure it was…</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<!-- Three -->
						<section id="three" class="wrapper style2 spotlights">
							<a href="#" class="image"><img src="http://schuylkillcorps.org/files/original/86d596d92ff572b34e7d92d93c74602a.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Oral Histories</h2>
									<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
									<ul class="actions">
										<li><a href="generic.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Four -->
					<section id="four" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>Browse Exhibits</h2>
  							<div class="features">

                <!-- (3) recently added items from db -->
								<section>
									<h2>Recently Added Items:</h2>
                  <?php
                  $recentItems = get_theme_option('Homepage Recent Items');
                  if ($recentItems === null || $recentItems === ''):
                      $recentItems = 3;
                  else:
                      $recentItems = (int) $recentItems;
                  endif;
                  if ($recentItems):
                  ?>
                  <div id="recent-items">
                      <?php echo recent_items($recentItems); ?>
                      <p class="view-items-link"><a href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
                  </div><!--end recent-items -->
                  <?php endif; ?>
									</section>

                <!-- featured item from db -->
                <section>
									<h2>Featured Item:</h2>
                  <?php if (get_theme_option('Display Featured Item') !== '0'): ?>
                  <!-- Featured Item -->
                  <div id="featured-item">
                      <?php echo random_featured_items(1); ?>
                  </div><!--end featured-item-->
                  <?php endif; ?>
								</section>

                <!-- featured collections from db -->
								<section>
									<h2>Featured Collection:</h2>
                  <div id="featured">
                      <?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
                      <!-- Featured Collection -->
                      <div id="featured-collection">
                          <?php echo random_featured_collection(); ?>
                      </div><!-- end featured collection -->
                      <?php endif; ?>
									</section>

                <!-- featured exhibit from db -->
								<section>
                  <?php if ((get_theme_option('Display Featured Exhibit') !== '0')
                          && plugin_is_active('ExhibitBuilder')
                          && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
                  <!-- Featured Exhibit -->
                  <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
                  <?php endif; ?>
                  </section>
							</div>
						</div>
					</section>

					<!-- Five -->
						<section id="five" class="wrapper style4 fullscreen fade-up">
							<div class="inner">
								<h1>Map</h1>


								<ul class="actions">
									<li><a href="#one" class="button scrolly">See Full Map</a></li>
								</ul>
							</div>
						</section>

				<!-- Six -->
					<section id="six" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Contribute Your Story</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</section>
			</div>

<?php if (get_theme_option('Homepage Text')): ?>
<p class="intro"><?php echo get_theme_option('Homepage Text'); ?></p>
<?php endif; ?>
</div> <!-- End Primary Column -->

<?php fire_plugin_hook('public_home', array('view' => $this)); ?>

<?php echo head(array('bodyid'=>'home', 'context' => 'home')); ?>


        <!-- Footer -->
        <footer id="footer" class="wrapper style1-alt">
            <div class="inner">
                <ul class="menu">
                    <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </footer>

    </body>
