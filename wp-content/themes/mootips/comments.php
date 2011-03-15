<?php if ( post_password_required() ) : ?>
	<p><?php _e('Enter your password to view comments.'); ?></p>
<?php return; endif; ?>

<?php if ( pings_open() ) : ?>

<section class="mod section">
	<div class="inner">
		<hgroup class="hd trackback">
			<h3>トラックバック</h3>
			<h4>Track back to article</h4>
		</hgroup>
		<div class="bd">
			<p>トラックバックを下記のURLに送ってください。<br /><a href="<?php trackback_url() ?>" rel="trackback"><?php trackback_url() ?></a></p>
		</div>
	</div>
</section>

<?php endif; ?>


<?php if ( have_comments() ) : ?>
	<section class="mod section">
		<div class="inner">
			<hgroup class="hd comments">
				<h3>コメント</h3>
				<h4>comments</h4>
			</hgroup>
			<div class="bd">
				<?php foreach ($comments as $comment) : ?>
					<?php
						$author		= get_comment_author();
						$authorURL	= get_comment_author_url();
					?>
					<article class="comment" <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
						<header class="hd">
							<h4><a title="<?php echo $author ?>" href="<?php echo $authorURL ?>"><?php echo $author ?></a></h4>
							<p class="attrbs">Comment at: <?php comment_date() ?></p>
							<p class="author"><a title="<?php echo $author ?>" href="<?php echo $authorURL ?>"><?php echo get_avatar( $comment, 40); ?></a></p>
						</header>
						<div class="bd">
							<?php comment_text() ?>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php else : // If there are no comments yet ?>
		
<?php endif; ?>



<?php if ( comments_open() ) : ?>

<section id="postcomment" class="mod section">
	<div class="inner">
		<hgroup class="hd cform">
			<h3>コメントフォーム</h3>
			<h4>Contribution form of comment</h4>
		</hgroup>

		<div class="bd">

			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
				<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>
			<?php else : ?>
				<form class="form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
					<?php if ( is_user_logged_in() ) : ?>
						<p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>
					<?php else : ?>
						<?php
							$req = get_option( 'require_name_email' );
							$aria_req = ( $req ? 'aria-required="true"' : '' );
						?>
						<fieldset>
							<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
							<dl>
								<dt><label for="author"><strong>名前: <?php if ($req) echo '(必須)' ?></strong></label></dt>
								<dd><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="50" tabindex="1" <?php if ($aria_req) echo $aria_req; ?> /></dd>

								<dt><label for="email"><strong>メールアドレス<?php if ($req) echo '(必須)'; ?></strong></label></dt>
								<dd><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="50" tabindex="2" <?php if ($aria_req) echo $aria_req; ?> /></dd>

								<dt><label for="url"><strong>URL</strong></label></dt>
								<dd><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="50" tabindex="3" /></dd>

								<dt><label for="comment"><strong>コメント</strong></label></dt>
								<dd><textarea id="comment" name="comment" cols="80" rows="10"></textarea></dd>
							</dl>
						</fieldset>
					<?php endif; ?>
					<p class="controls"><button type="submit" name="post" class="button">コメントを投稿する</button></p>
				</form>

			<?php endif; // If registration required and not logged in ?>
		</div>
	</div>
</section>

<?php else : // Comments are closed ?>
	<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>
