<aside id="secondary" class="col-xs-12 col-md-3" >
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
											<?php get_search_form(); ?>
												<!-- <label> Sök efter:</label>
												<input type="text" />
												<input type="submit" value="Sök" /> -->
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									

                                <?php if(is_active_sidebar('blog-sidebar')):?>

                                    <?php dynamic_sidebar('blog-sidebar'); ?>

                                <?php endif; ?>


								</ul>
							</div>
						</aside>