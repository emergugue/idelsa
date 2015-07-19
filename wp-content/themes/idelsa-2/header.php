<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Idelsa
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>
	<div class="page container">
		<div class="row">
			<div class="col-md-3">
				<div class="left-content">
					<header class="header">
						<div class="row">
							<div class="col-xs-8 col-md-12">
								<div class="ctn_logo">
									<a href="<?php bloginfo("url"); ?> ">
										<figure class="logo">
											<picture>
										      <source media="(min-width: 992px)" srcset="<?php bloginfo("template_directory"); ?>/img/logo-idelsa.png">
										      <img src="<?php bloginfo("template_directory"); ?>/img/logo-idelsa-sm.png" alt="Logo de Idelsa">
										    </picture>
											<!-- <img src="img/logo-idelsa.png" alt="Logo de Idelsa"> -->
										</figure>
									</a>
								</div><!-- /ctn_logo -->
							</div>
							<div class="col-xs-4 col-md-12">
								<nav id="site-navigation" class="main-navigation ctn_nav " role="navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								</nav><!-- /ctn_menu -->
							</div>
						</div>
					</header>
					<footer class="no-visible-mobile">
						<div class="ctn_footer">
							<?php dynamic_sidebar("info_footer" ); ?>
						</div>
					</footer>
				</div><!-- /left-content -->
			</div><!-- /col-md-3 -->
