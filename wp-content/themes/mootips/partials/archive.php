<section class="mod aside">
	<div class="inner">
		<hgroup class="hd">
			<h3 class="h3">アーカイブ</h3>
			<h4 class="h4">Archive during month</h4>
		</hgroup>
		<div class="bd">
			<?php $archive = wp_get_archives('type=monthly&echo=0'); ?>
			<ul class="simpleList">
				<?php if ($archive): ?>
					<?php echo $archive; ?>
				<?php else: ?>
					<li>アーカイブはありません。</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>