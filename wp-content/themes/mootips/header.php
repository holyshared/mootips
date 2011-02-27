<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster:regular,italic,bold&amp;subset=latin" type="text/css" />
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Vollkorn:regular,italic,bold&amp;subset=latin" type="text/css" />
		<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/ga.js"></script>
	</head>
	<body>

		<article class="page liquid">

			<header class="head">
				<div class="line gs960">
					<div class="unit size1of4">
						<h1 class="logo"><a title="<?php bloginfo('name'); ?>" href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory') ?>/images/img_logo.png" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
					</div>
					<div class="lastUnit size3of4">
						<nav class="gbnav">
							<ul class="nav">
								<?php wp_list_categories('title_li=&orderby=ID&exclude=Pendding&hide_empty=0'); ?>
							</ul>
						</nav>
					</div>
				</div>
			</header>
