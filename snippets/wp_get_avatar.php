<!--
	category: Wordpress
	name: Avatar
	toolTip: get_avatar
-->
<?php
	$email = get_the_author_meta('user_email');
	$url = get_the_author_meta('user_url');
?>
<a class="author" title="<?php the_author(); ?>" href="<?php echo $url; ?>"><?php echo get_avatar($email, '20'); ?><?php the_author(); ?></a>
