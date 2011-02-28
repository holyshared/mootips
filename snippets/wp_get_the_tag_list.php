<?php if (get_the_tag_list()) : ?>
	<ul class="tagList">
		<?php echo get_the_tag_list('<li>', '</li><li>', '</li>'); ?>
	</ul>
<?php endif; ?>