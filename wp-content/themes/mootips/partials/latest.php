<section class="mod aside">
	<div class="inner">
		<hgroup class="hd">
			<h3 class="h3">最新記事</h3>
			<h4 class="h4">Latest article</h4>
		</hgroup>
		<div class="bd">
			<ul class="simpleList">
				<?php $entries = get_posts("numberposts=5"); ?>
				<?php if (count($entries) > 0) : ?>
					<?php foreach($entries as $post) : ?>
						<?php setup_postdata($post); ?>
						<li><?php the_date(); ?><br /><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" class="internal"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				<?php else: ?>
					<li>最新の投稿はありません。</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>