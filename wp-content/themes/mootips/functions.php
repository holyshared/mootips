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
		$breadcrumbs .= '<li><a title="' . get_bloginfo('name') . '" href="'. get_settings('home') .'">'. get_bloginfo('name') .'</a></li>';
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

function get_social_bookmark(){

	$title = get_the_title();
	$perma = get_permalink();

	$social = ''
	. '<li class="script-style">'
	. '<a href="http://scriptandstyle.com/submit?url=' . $perma . '&title=' . $title . '" title="Submit this to Script & Style">'
	. '<img title="" alt="" src="' . bloginfo('template_directory') . '/images/buttons/hatena.png" />'
	. '</a></li>'

	. '<li class="blinklist"><a href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&Url=' . $perma . '&Title=' . $title . '" title="Share this on Blinklist"> </a></li>'
	. '<li class="delicious"><a href="http://del.icio.us/post?url=' . $perma . '&title=' . $title . '" title="Share this on del.icio.us"> </a></li>'
	. '<li class="digg"><a href="http://digg.com/submit?phase=2&url=' . $perma . '&title=' . $title . '" title="Digg this!"> </a></li>'
	. '<li class="furl"><a href="http://www.furl.net/storeIt.jsp?t=' . $title . '&u=' . $perma . '" title="Share this on Furl"> </a></li>'
	. '<li class="reddit"><a href="http://reddit.com/submit?url=' . $perma . '&title=' . $title . '" title="Share this on Reddit"> </a></li>'
	. '<li class="yahoo"><a href="http://myweb2.search.yahoo.com/myresults/bookmarklet?t=' . $title . '&u=' . $perma . '" title="Save this to Yahoo MyWeb"> </a></li>'
	. '<li class="stumble"><a href="http://www.stumbleupon.com/submit?url=' . $perma . '&title=' . $title . '" title="Stumble upon something good? Share it on StumbleUpon"> </a></li>'
	. '<li class="technorati"><a href="http://technorati.com/faves?add=' . $perma . '" title="Share this on Technorati"> </a></li>'
	. '<li class="mixx"><a href="http://www.mixx.com/submit?page_url=' . $perma . '&amp;title=' . $title . '" title="Share this on Mixx"> </a></li>'
	. '<li class="myspace"><a href="http://www.myspace.com/Modules/PostTo/Pages/?u=' . $perma . '&amp;t=' . $title . '" title="Post this to MySpace"> </a></li>'
	. '<li class="designfloat"><a href="http://www.designfloat.com/submit.php?url=' . $perma . '&amp;title=' . $title . '" title="Submit this to DesignFloat"> </a></li>'
	. '<li class="facebook"><a href="http://www.facebook.com/share.php?u=' . $perma . '&amp;t=' . $title . '" title="Share this on Facebook"> </a></li>';

	return $social;

} 

?>
