<!--
	category: Wordpress
	name: Posts
	toolTip: get_posts
-->
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