
<div class="foot">
	<aside class="line gs960">
		<div class="unit size1of5">
			<section class="mod">
				<div class="inner">
					<header class="hd fs">
						<h4>categories</h4>
					</header>
					<div class="bd">
					</div>
				</div>
			</section>
		</div>
		<div class="unit size2of5">
			<section class="mod">
				<div class="inner">
					<header class="hd fs">
						<h4>about</h4>
					</header>
					<div class="bd">
						<p>このサイトは堀尾典孝が運営しているMootools、Javascriptに関するトピックスを掲載しています。</p>
						<p>Mootoolsを詳しく知りたい人向けに実践的な情報を提供し、情報を共有することを目的に運営しています。</p>
					</div>
				</div>
			</section>
		</div>
		<div class="unit size2of5">
			<section class="mod">
				<div class="inner">
					<header class="hd fs">
						<h4>athour</h4>
					</header>
					<div class="bd">

<?php
	$userid = 1;
	$email = get_the_author_meta('user_email', $userid);
	$userurl = get_the_author_meta('user_url', $userid);
	$username = get_the_author_meta('user_firstname', $userid) . ' ' . get_the_author_meta('user_lastname', $userid);
?>
<p><a class="author" title="<?php echo $username; ?>" href="<?php echo $userurl; ?>"><?php echo get_avatar($email, '50'); ?><?php echo $username; ?></a></p>

					</div>
				</div>
			</section>
		</div>
	</aside>
	<footer>
		<p class="license">This site is licensed under a Creative Commons License But, a part of contents is excluded.<br />Powered by WordPress</p>
		<p class="copyright">copyright 2010 Noritaka Horio all right reserved.</p>
	</footer>
</div>

		</article>

	</body>
</html>