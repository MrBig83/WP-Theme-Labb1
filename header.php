<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />


    <?php
        wp_head();
    ?>

</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
                        <?php
                            if(function_exists('the_custom_logo')){
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $logo = wp_get_attachment_image_src($custom_logo_id);
                            }
                        ?>
						<a class="logo" href="<?php echo site_url(); ?>">
                            <?php echo get_bloginfo('name'); ?>
                        </a> 
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
							<?php get_search_form(); ?>
								<!-- <label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" /> -->
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<?php get_search_form(); ?>
					<!-- <label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" /> -->
				</div>
			</form>
		</div>

        <nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<?php
							wp_nav_menu(
								array(
									'menu' => 'primary',
									'container' => '',
									'theme_location' => 'primary', 
									'items_wrap' => '<ul class="container row col-xs-12 menu">%3$s</ul>'
									)
								);
							?>
						</ul>
					</div>
				</div>
			</div>
		</nav>