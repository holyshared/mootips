<?php get_header(); ?>

<section class="body gs960">

<?php get_sidebar(); ?>

<div class="main">
	<?php if ($breadcrumbs = get_breadcrumbs()) : ?>
		<ul class="breadcrumb"><?php echo $breadcrumbs; ?></ul>
	<?php endif; ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="mod section entry">
				<div class="inner">
					<header class="hd">
						<h2 class="h2"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<dl class="attrbs">
							<dt>author:</dt>
							<dd><?php the_author_link(); ?></dd>
							<dt>posted:</dt>
							<dd><?php the_date(); ?></dd>
							<?php if (get_the_tag_list()) : ?>
								<dt>tags:</dt>
								<dd>
									<?php echo the_tags(''); ?>
								</dd>
							<?php endif; ?>
						</dl>
					</header>

					<div class="bd">
						<?php the_content(); ?>
					</div>
				</div>
			</article>

			<aside class="mod social">
				<div class="inner">

<ul class="bookmarks">
	<li><a href="http://b.hatena.ne.jp/append?<?php the_permalink(); ?>" title="このエントリーを含むはてなブックマーク" target="_blank">はてなブックマーク</a></li>
	<li><a title="It shares with Facebook." href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="_blank"><img title="Facebook" alt="Facebook" src="<?php bloginfo('template_directory') ?>/images/buttons/facebook.png" /></a></li>
	<li><a title="It shares with Delicious."  href="http://delicious.com/post?url=<?php the_permalink();?>&title=<?php the_title();?>" target="_blank"><img title="Delicious" alt="Delicious" src="<?php bloginfo('template_directory') ?>/images/buttons/delicious.png" /></a></li>
	<li><a title="It shares with Digg." href="http://www.digg.com/submit?phase=2&url=<?php the_permalink();?>" target="_blank"><img title="Digg" alt="Digg" src="<?php bloginfo('template_directory') ?>/images/buttons/digg.png" /></a></li>
	<li><a title="It shares with StumbleUpon." href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank"><img title="StumbleUpon" alt="StumbleUpon" src="<?php bloginfo('template_directory') ?>/images/buttons/stumbleupon.png" /></a></li>
</ul>

				</div>
			</aside>

			<aside class="mod neighbors">
				<div class="inner">
					<ul class="pager buttons">
						<li class="prev"><?php previous_post_link_short('%link', '&laquo; %title', TRUE, null, 30, null) ?></li>
						<li class="next"><?php next_post_link_short('%link', '%title &raquo;', TRUE, null, 30, null) ?></li>
					</ul>
				</div>
			</aside>

			<?php comments_template(); ?>

		<?php endwhile; ?>

	<?php else: ?>
		<div class="mod empty">
			<div class="inner">
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			</div>
		</div>
	<?php endif; ?>

</div>
</section>

<?php get_footer(); ?>