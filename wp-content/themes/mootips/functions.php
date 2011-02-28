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
	
function get_breadcrumbs(){
	global $wp_query;

	$breadcrumbs = "";
	if (!is_home()){
		$breadcrumbs .= '<li><a href="'. get_settings('home') .'">'. get_bloginfo('name') .'</a></li>';
		if (is_category()) {
			$catTitle = single_cat_title( "", false );
			$cat = get_cat_ID( $catTitle );
			$breadcrumbs .= "<li>". get_category_parents( $cat, true, "" ) ."</li>";
		} elseif (is_archive() && !is_category()) {
			$y = get_query_var('year');
			$m = get_query_var('monthnum');
			if (is_year()) {
				$breadcrumbs .= "<li>" . $y . "年</li>";
			}
			if (is_month()) {
				$breadcrumbs .= '<li><a title="' . $y .'年" href="' . get_year_link($y) . '">' . $y . '年</a></li>';
				$breadcrumbs .= "<li>" . $m . "月</li>";
			}
		} elseif (is_search()) {
			$breadcrumbs .= "<li>Search Results</li>";
		} elseif (is_404()) {
			$breadcrumbs .= "<li>404 Not Found</li>";
		} elseif (is_single()) {
			$category = get_the_category();
			$category_id = get_cat_ID( $category[0]->cat_name );
			$breadcrumbs .= '<li>' . get_category_parents( $category_id, true, "" ) . "</li>";
			$breadcrumbs .= '<li>' . the_title('','', false) ."</li>";
		} elseif (is_page()) {
			$post = $wp_query->get_queried_object();
			if ($post->post_parent == 0){
				$breadcrumbs .= "<li>".the_title('','', false)."</li>";
			} else {
				$title = the_title('','', false);
				$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
				array_push($ancestors, $post->ID);
				foreach ( $ancestors as $ancestor ){
					if( $ancestor != end($ancestors) ){
						$breadcrumbs .= '<li><a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
					} else {
						$breadcrumbs .= '<li>'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
					}
				}
			}
		}
	}
	return $breadcrumbs;
}
?>
