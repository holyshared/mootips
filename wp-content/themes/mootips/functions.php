<?php
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => __('Primary', 'mootips'),
			'id' => 'primary',
			'description' => __( 'The primary widget area', 'mootips' ),
			'before_widget' => '<section class="mod aside %2$s"><div class="inner">',
			'after_widget' => '</div></div></section>',
			'before_title' => '<hgroup class="hd"><h3>',
			'after_title' => '</h3></hgroup><div class="bd">',
		));
	}
?>
