<?php get_header(); ?>

<section class="body gs960">

<?php get_sidebar(); ?>

<div class="main">
	<?php if ($breadcrumbs = get_breadcrumbs()) : ?>
		<ul class="breadcrumb"><?php echo $breadcrumbs; ?></ul>
	<?php endif; ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="mod entry">
				<div class="inner">
					<header class="hd">
						<h2 class="h2"><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<dl class="attrbs">
							<dt>author:</dt>
							<dd><?php the_author_link(); ?></dd>
							<dt>posted:</dt>
							<dd><?php the_date(); ?></dd>
						</dl>
					</header>

					<div class="bd">
						<?php the_content(); ?>

						<?php if (get_the_tag_list()) : ?>
							<ul class="tagList">
								<?php echo get_the_tag_list('<li>', '</li><li>', '</li>'); ?>
							</ul>
						<?php else: ?>
							<p>タグはありません</p>
						<?php endif; ?>
					</div>
				</div>
			</article>

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