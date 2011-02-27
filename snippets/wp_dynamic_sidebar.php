<!--
	category: Wordpress
	name: Widget Section
	toolTip: dynamic_sidebar
-->
<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<!-- Widgets -->
<?php endif; ?>
</ul>
