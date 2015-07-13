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
	<?php wp_head(); ?>
</head>
<body>
	<div class="page container">
		<div class="row">
			<div class="left-content col-md-3">
				<header class="header">
					<div class="row">
						<div class="ctn_logo col-xs-8 col-md-12">
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
						<nav id="site-navigation" class="main-navigation ctn_menu col-xs-4 col-md-12" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'idelsa' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
						</nav><!-- /ctn_menu -->
					</div>
				</header>
				<footer class="no-visible-mobile">
					<div class="ctn_footer">
						<?php dynamic_sidebar("info_footer" ); ?>
					</div>
				</footer>
			</div><!-- /left-content -->
