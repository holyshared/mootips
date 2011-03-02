<?php get_header(); ?>

<section class="body gs960">

<?php get_sidebar(); ?>

<div class="main">
	<?php if ($breadcrumbs = get_breadcrumbs()) : ?>
		<ul class="breadcrumb"><?php echo $breadcrumbs; ?></ul>
	<?php endif; ?>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<article class="mod excerpt">
				<div class="inner">
					<div class="bd">
						<div class="line">
							<div class="unit size4of5">
								<div class="mod">
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
												<dd><?php the_date(); ?></dd>
											</dl>
										</header>
										<div class="bd">
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							</div>

							<div class="lastUnit size1of5">

								<aside class="mod tags">
									<div class="inner">
										<div class="hd">
											<h3 class="h3">タグ</h3>
										</div>
										<div class="bd">
											<?php if (get_the_tag_list()) : ?>
												<ul class="tagList">
													<?php echo get_the_tag_list('<li>', '</li><li>', '</li>'); ?>
												</ul>
											<?php else: ?>
												<p>タグはありません</p>
											<?php endif; ?>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>

					<footer class="ft">
						<ul class="entryLinks buttons">
							<li><a href="<?php comments_link(); ?>">コメントする</a></li>
							<li><a href="<?php trackback_url(true); ?>">トラックバック</a></li>
						</ul>
					</footer>

				</div>
			</article>

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