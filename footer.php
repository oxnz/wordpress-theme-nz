<?php
?>

</div><!-- #site-content #container -->

<footer id="site-footer" class="site-footer">
	<div class="container">
		<div class="footer-links">
			<div class="column">
				<div class="title">
					<h4>Hosted Projects</h4>
					<div>Projects hosted or created by me</div>
				</div>
				<ul>
					<li><a href="https://github.com/oxnz/pygtk-tutor">pygtk-tutor</a></li>
					<li><a href="https://github.com/oxnz/yaosa">yaosa</a></li>
					<li><a href="https://github.com/oxnz/zdcomp">zdcomp</a></li>
					<li><a href="https://github.com/oxnz/algorithms">algorithms</a></li>
					<li><a href="https://github.com/oxnz/design-patterns">design patterns</a></li>
				</ul>
			</div>
			<div class="column">
				<div class="title">
					<h4>Available Products</h4>
					<div>Availabel softwares written by me</div>
				</div>
				<ul>
					<li><a href="https://github.com/oxnz/clang-user-manual">clang-user-manual</a></li>
					<li><a href="https://github.com/oxnz/digital-china-supplicant">Digital China Supplicant</a></li>
					<li><a href="https://github.com/oxnz/wpbootstrap">WPBootstrap</a></li>
					<li><a href="https://github.com/oxnz/oxnzbot">oxnzbot</a></li>
					<li><a href="https://github.com/oxnz/nix-utils">nix-utils</a></li>
					<li><a href="https://github.com/oxnz/NZPlayer">NZPlayer</a></li>
				</ul>
			</div>
			<div class="column">
				<div class="title">
					<h4>Social Connect</h4>
					<div>Drop me a message</div>
				</div>
				<ul>
					<li><a href="#">Twitter</a> |
						<a href="#">Facebook</a> |
						<a href="http://weibo.com/u/2868646094">weibo</a></li>
					<li><a href="https://github.com/oxnz">Github</a> |
						<a href="http://sourceforge.net/users/yunxinyi">SourceForge</a> |
						<a href="#">StackOverflow</a></li>
					<li>Email: <a href="mailto:yunxinyi@gmail.com">yunxinyi@gmail.com</a><br>
						Skype: yunxinyi@live.cn</li>
						<li><a href="<?php bloginfo('rss_url'); ?>">RSS - Works</a>, RSS-Blog</li>
				</ul>
			</div>
			<span class="justify"></span>
		</div><!-- #footer-links -->
	</div><!-- #container -->
	<div class="footer-claim">
		<div class="container">
			<div class="copyright">
				<div>&copy; 2011-2014 Oxnz. Themed by <a href="https://github.com/oxnz/wpbootstrap" title="WPBootstrap project page">WPBootstrap</a>. 
					<small><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wpbootstrap' ) ); ?>"><?php printf( __( 'Powered by %s'), 'WordPress' ); ?></a></small>
				</div>
				<div class="validate-links">
<a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid XHTML</a>
|
<a href="http://jigsaw.w3.org/css-validator/check/referer" title="This page validates as CSS">Valid CSS</a>
				</div>
				<span class="justify"></span>
			</div><!-- #copyright -->
			<div>Policy here a long line to take up place - This is a long line to take up place This is a long line to take up place </div>
			<div>Policy here This is a long line to take up place - This is a long line to take up place This is a long line to take up place </div>
		</div>
	</div><!-- #container -->
</footer>

	<div class="modal fade" id="about">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">About</h4>
				</div><!-- #modal-header -->
				<div class="modal-body">
					<p>&copy; 2011-2014 Oxnz.</p>
				</div><!-- #modal-body -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-primary" data-dismiss="modal">OK</button>
				</div>
			</div>
		</div>
	</div><!-- #about -->

	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Contact</h4>
		  </div>
		  <div class="modal-body">
			<?php comment_form(array(
				'title_reply' => __('Leave me a message'),
				'title_reply_to' => ('Leave %s a message'),
				'comment_field' =>  '<p class="comment-form-comment">' .
				'<textarea class="form-control" id="comment" name="comment" rows="6" aria-required="true"></textarea></p>',
				'label_submit' => __('Send'),
			)); ?>
		  </div>
		  <div class="modal-footer"><p>&copy; 2011-2014 Oxnz</p></div>
		</div><!-- #modal-content -->
	  </div>
	</div><!-- #contact -->
	<!--
	<canvas id="footerbg">Your browser does not support the HTML5 canvas tag.</canvas>
	-->
	<script src="<?php echo get_template_directory_uri(); ?>/wpbootstrap.js"></script>

<?php wp_footer(); ?>
</body>
</html>
