require 'ruble'

#================================================================
# Wordpress Template Tags
#================================================================

# register_sidebar
#----------------------------------------------------------------

snippet "register_sidebar" do |snip|

	snip.trigger = "register_sidebar"
	snip.expansion = <<END
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
END

end


# wp_list_categories
#----------------------------------------------------------------

snippet "wp_list_categories" do |snip|

	snip.trigger = "wp_list_categories"
	snip.expansion = <<END
<?php wp_list_categories('title_li=&orderby=ID&exclude=Pendding&hide_empty=0'); ?>
END

end


# get_the_tag_list
#----------------------------------------------------------------

snippet "get_the_tag_list" do |snip|

	snip.trigger = "get_the_tag_list"
	snip.expansion = <<END
<?php if (get_the_tag_list()) : ?>
	<ul class="tagList">
		<?php echo get_the_tag_list('<li>', '</li><li>', '</li>'); ?>
	</ul>
<?php endif; ?>
END

end


# get_posts
#----------------------------------------------------------------

snippet "get_posts" do |snip|

	snip.trigger = "get_posts"
	snip.expansion = <<END
<ul>
	<?php $entries = get_posts("numberposts=5"); ?>
	<?php if (count($entries) > 0) : ?>
		<?php foreach($entries as $post) : ?>
			<?php setup_postdata($post); ?>
			<li><?php the_date(); ?><br /><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" class="internal"><?php the_title(); ?></a></li>
		<?php endforeach; ?>
	<?php else: ?>
		<li><?php _e('Sorry, no posts matched your criteria.'); ?></li>
	<?php endif; ?>
</ul>
END

end


# wp_get_archives
#----------------------------------------------------------------

snippet "wp_get_archives" do |snip|

	snip.trigger = "wp_get_archives"
	snip.expansion = <<END
<?php wp_get_archives('type=monthly');?>
END

end


# dynamic_sidebar
#----------------------------------------------------------------

snippet "dynamic_sidebar" do |snip|

	snip.trigger = "dynamic_sidebar"
	snip.expansion = <<END
<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<!-- Widgets -->
<?php endif; ?>
</ul>
END

end


# get_avatar
#----------------------------------------------------------------

snippet "get_avatar" do |snip|

	snip.trigger = "get_avatar"
	snip.expansion = <<END
<?php
	$email = get_the_author_meta('user_email');
	$url = get_the_author_meta('user_url');
?>
<a class="author" title="<?php the_author(); ?>" href="<?php echo $url; ?>"><?php echo get_avatar($email, '20'); ?><?php the_author(); ?></a>
END

end
