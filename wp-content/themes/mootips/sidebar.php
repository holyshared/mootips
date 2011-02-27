<aside class="leftCol yahoo">

<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('primary')) : ?>
	<?php dynamic_sidebar('primary'); ?>
<?php endif; ?>

<?php include "partials/latest.php"; ?>
<?php include "partials/category.php"; ?>
<?php include "partials/archive.php"; ?>

</aside>