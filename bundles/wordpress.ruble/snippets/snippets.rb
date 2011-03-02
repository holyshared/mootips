require 'ruble'

#================================================================
# Wordpress Template Tags
#================================================================

# get_header
#----------------------------------------------------------------

snippet "get_header()" do |snip|

	snip.trigger = "get_header"
	snip.expansion = <<END
<?php echo get_header(); ?>
END

end


# get_footer
#----------------------------------------------------------------

snippet "get_footer()" do |snip|

	snip.trigger = "get_footer"
	snip.expansion = <<END
<?php echo get_footer(); ?>
END

end


# get_sidebar
#----------------------------------------------------------------

snippet "get_sidebar()" do |snip|

	snip.trigger = "get_sidebar"
	snip.expansion = <<END
<?php echo get_sidebar(); ?>
END

end


# comments_template
#----------------------------------------------------------------

snippet "comments_template()" do |snip|

	snip.trigger = "comments_template"
	snip.expansion = <<END
<?php comments_template(); ?>
END

end





# register_sidebar
#----------------------------------------------------------------

snippet "register_sidebar(...)" do |snip|

	snip.trigger = "register_sidebar"
	snip.expansion = <<END
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => ${0:name},
		'id' => ${1:id},
		'description' => '${2:description}',
		'before_widget' => '<section class="mod aside %2$s"><div class="inner">',
		'after_widget' => '</div></div></section>',
		'before_title' => '<header class="hd"><h3>',
		'after_title' => '</h3></header><div class="bd">',
	));
}
END

end


# dynamic_sidebar
#----------------------------------------------------------------

snippet "dynamic_sidebar()" do |snip|

	snip.trigger = "dynamic_sidebar"
	snip.expansion = <<END
<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<!-- Widgets -->
<?php endif; ?>
</ul>
END

end




# wp_list_categories
#----------------------------------------------------------------

snippet "wp_list_categories(...)" do |snip|

	snip.trigger = "wp_list_categories"
	snip.expansion = <<END
<?php wp_list_categories('${0:query}'); ?>
END

end


# get_the_tag_list
#----------------------------------------------------------------

snippet "get_the_tag_list()" do |snip|

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

snippet "get_posts(...)" do |snip|

	snip.trigger = "get_posts"
	snip.expansion = <<END
<ul>
	<?php $entries = get_posts('${0:query}'); ?>
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

snippet "wp_get_archives(...)" do |snip|

	snip.trigger = "wp_get_archives"
	snip.expansion = <<END
<?php wp_get_archives('${0:query}'); ?>
END

end


# get_avatar
#----------------------------------------------------------------

snippet "get_avatar()" do |snip|

	snip.trigger = "get_avatar"
	snip.expansion = <<END
<?php
	$email = get_the_author_meta('user_email');
	$url = get_the_author_meta('user_url');
?>
<a class="author" title="<?php the_author(); ?>" href="<?php echo $url; ?>"><?php echo get_avatar($email, '20'); ?><?php the_author(); ?></a>
END

end


# Meta tag of header
#----------------------------------------------------------------

snippet "Meta tag of header" do |snip|

	snip.trigger = "wp:head"
	snip.expansion = <<END
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	</head>
END

end


# the_content
#----------------------------------------------------------------

snippet "the_content()" do |snip|

	snip.trigger = "the_content"
	snip.expansion = <<END
<?php the_content(); ?>
END

end


# have_posts
#----------------------------------------------------------------

snippet "have_posts()" do |snip|

	snip.trigger = "have_posts"
	snip.expansion = <<END
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php comments_template(); ?>

	<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
END

end
