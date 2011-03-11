
<div class="foot">
	<aside class="line gs960">
		<div class="unit size1of5">
			<section class="mod">
				<div class="inner">
					<hgroup class="hd fs">
						<h4>カテゴリー</h4>
						<h5>Category of contents</h5>
					</hgroup>
					<div class="bd">
						<ul class="simpleList">
							<?php wp_list_categories('title_li=&orderby=ID&exclude=1&hide_empty=0'); ?>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<div class="unit size2of5">
			<section class="mod">
				<div class="inner">
					<hgroup class="hd fs">
						<h4>サイトについて</h4>
						<h5>About this site</h5>
					</hgroup>
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
					<hgroup class="hd fs">
						<h4>運営者</h4>
						<h5>Owner on site</h5>
					</hgroup>
					<div class="bd">

<?php
	$userid = 1;
	$email = get_the_author_meta('user_email', $userid);
	$userurl = get_the_author_meta('user_url', $userid);
	$username = get_the_author_meta('user_firstname', $userid) . ' ' . get_the_author_meta('user_lastname', $userid);
?>
<p class="master"><a title="<?php echo $username; ?>" href="<?php echo $userurl; ?>"><?php echo get_avatar($email, '40'); ?>堀尾典孝<br /><?php echo $username; ?></a></p>
<ul class="services">
	<li class="facebook"><a href="http://www.facebook.com/profile.php?id=100000154147844" title="Facebook"><img title="Facebook" alt="Facebook" src="<?php echo bloginfo('template_directory') ?>/images/profiles/facebook.png" /></a></li>
	<li class="twitter"><a href="http://twitter.com/holydesign" title=""><img title="Twitter" alt="Twitter" src="<?php echo bloginfo('template_directory') ?>/images/profiles/twitter.png" /></a></li>
	<li class="tumblr"><a href="http://holyshared.tumblr.com/" title=""><img title="Tumblr" alt="Tumblr" src="<?php echo bloginfo('template_directory') ?>/images/profiles/tumblr.png" /></a></li>
	<li class="flickr"><a href="http://www.flickr.com/photos/42458742@N06/" title=""><img title="flickr" alt="flickr" src="<?php echo bloginfo('template_directory') ?>/images/profiles/flickr.png" /></a></li>
	<li class="lastfm"><a href="http://www.lastfm.jp/user/holyshared" title=""><img title="LastFm" alt="LastFm" src="<?php echo bloginfo('template_directory') ?>/images/profiles/lastfm.png" /></a></li>
</ul>

					</div>
				</div>
			</section>
		</div>
	</aside>
	<footer>
		<p class="license gs960">This site is licensed under a Creative Commons License But, a part of contents is excluded.<br />Powered by WordPress</p>
		<p class="copyright">copyright 2011 <a title="<?php echo $username ?>" href="<?php echo $userurl ?>"><?php echo $username ?></a> all right reserved.</p>
	</footer>
</div>

		</article>

	</body>
</html>