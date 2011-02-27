<!--
	category: Wordpress
	name: Register Sidebar
	toolTip: register_sidebar
-->
<?php
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => __('Primary', 'id'),
			'id' => 'primary',
			'description' => __( 'The primary widget area', 'id' ),
			'before_widget' => '<section class="mod aside %2$s"><div class="inner">',
			'after_widget' => '</div></div></section>',
			'before_title' => '<header class="hd"><h3>',
			'after_title' => '</h3></header><div class="bd">',
		));
	}
?>
