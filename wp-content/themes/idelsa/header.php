<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title><?php bloginfo("name") ?></title>
	<meta name="description" content="<?php bloginfo("description") ?>">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>" media="screen" charset="utf-8">
	<?php wp_head(); ?>
</head>
<body>
	<div class="page">
		<header class="header-page">
			<h1><?php bloginfo("name") ?></h1>
			<h2><?php bloginfo("description") ?></h2>
			<?php include TEMPLATEPATH . "/templates/nav-header.php" ?>
		</header>
