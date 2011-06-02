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
							<?php
								$email = get_the_author_meta('user_email');
								$url = get_the_author_meta('user_url');
							?>
							<dt>author:</dt>
							<dd><a class="author" title="<?php the_author(); ?>" href="<?php echo $url; ?>"><?php echo get_avatar($email, '20'); ?><?php the_author(); ?></a></dd>
							<dt>posted:</dt>
							<dd><?php the_time('Y年n月j日 H:i'); ?></dd>
							<?php if (get_the_tag_list()) : ?>
								<dt>tags:</dt>
								<dd>
									<?php echo the_tags(''); ?>
								</dd>
							<?php endif; ?>
						</dl>
						<g:plusone size="medium"></g:plusone>
						<span id="fb-root"></span><script src="http://connect.facebook.net/en_US/all.js#appId=211616925545958&amp;xfbml=1"></script><fb:like href="http://mootips.org/" send="false" width="450" show_faces="true" font=""></fb:like>
					</header>

					<div class="bd">
						<?php the_content(); ?>
					</div>
				</div>
			</article>

			<aside class="mod social">
				<div class="inner">

					<ul class="bookmarks">
						<?php include 'partials/bookmarks.php' ?>
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