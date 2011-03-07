<?php
	$title = get_the_title();
	$perma = get_permalink();
?>
<li class="hatena"><a href="http://b.hatena.ne.jp/append?<?php $perma; ?>" title="Share this on Hatena Bookmark"><img title="Hatena Bookmark" alt="Hatena Bookmark" src="<?php bloginfo('template_directory') ?>/images/buttons/hatena.png" /></a></li>
<li class="delicious"><a href="http://del.icio.us/post?url=<?php echo $perma ?>&amp;title=<?php echo $title ?>" title="Share this on del.icio.us"><img title="delicious" alt="delicious" src="<?php echo bloginfo('template_directory') ?>/images/buttons/delicious.png" /></a></li>
<li class="digg"><a href="http://digg.com/submit?phase=2&amp;url=<?php echo $perma ?>&amp;title=<?php echo $title ?>" title="Digg this!"><img title="Digg" alt="Digg" src="<?php echo bloginfo('template_directory') ?>/images/buttons/digg.png" /></a></li>
<li class="reddit"><a href="http://reddit.com/submit?url=<?php echo $perma ?>&amp;title=<?php echo $title ?>" title="Share this on Reddit"><img title="Reddit" alt="Reddit" src="<?php echo bloginfo('template_directory') ?>/images/buttons/reddit.png" /></a></li>
<li class="stumble"><a href="http://www.stumbleupon.com/submit?url=<?php echo $perma ?>&amp;title=<?php echo $title ?>" title="Stumble upon something good? Share it on StumbleUpon"><img title="Stumble" alt="Stumble" src="<?php echo bloginfo('template_directory') ?>/images/buttons/stumbleupon.png" /></a></li>
<li class="technorati"><a href="http://technorati.com/faves?add=<?php echo $perma ?>" title="Share this on Technorati"><img title="Technorati" alt="Technorati" src="<?php echo bloginfo('template_directory') ?>/images/buttons/technorati.png" /></a></li>
<li class="myspace"><a href="http://www.myspace.com/Modules/PostTo/Pages/?u=<?php echo $perma ?>&amp;t=<?php echo $title ?>" title="Post this to MySpace"><img title="MySpace" alt="MySpace" src="<?php echo bloginfo('template_directory') ?>/images/buttons/myspace.png" /></a></li>
<li class="designfloat"><a href="http://www.designfloat.com/submit.php?url=<?php echo $perma ?>&amp;title=<?php echo $title ?>" title="Submit this to DesignFloat"><img title="DesignFloat" alt="DesignFloat" src="<?php echo bloginfo('template_directory') ?>/images/buttons/designfloat.png" /></a></li>
<li class="facebook"><a href="http://www.facebook.com/share.php?u=<?php echo $perma ?>&amp;t=<?php echo $title ?>" title="Share this on Facebook"><img title="Facebook" alt="Facebook" src="<?php echo bloginfo('template_directory') ?>/images/buttons/facebook.png" /></a></li>
