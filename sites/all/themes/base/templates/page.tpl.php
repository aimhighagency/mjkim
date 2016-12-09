
<header id="header-main">
	<div class="inner">
		<div id="logo"><a href="/">MJ Kim</a></div>
		
		<div id="nav-holder">
			<nav id="nav-main">
				<div class="inner">
					<?php print render($page['nav_main']); ?>
				</div>
				<footer>
					<div class="contact">
						<div class="email"><a href="mailto:mj@mjkimpictures.com">mj@mjkimpictures.com</a></div>
							<div class="phone">+1 310 210 5575 (US)</div>
							<div class="phone">+44 7771 939 487 (UK)</div>
							<div class="phone">+82 10 7531 0303 (S.Korea)</div>
							<div class="social-icons">
								<a href="http://twitter.com/mjkim_lalala" class="icon-twitter" target="_blank"></a>
								<a href="http://instagram.com/mjkim_lalala" class="icon-instagram" target="_blank"></a>
								<a href="http://facebook.com/mjkimpictures" class="icon-facebook" target="_blank"></a>
							</div>				
					</div>

					<div class="copy">
						&copy; <?php echo date('Y'); ?> MJ Kim Pictures &mdash; Don't Steal. It's not nice.
					</div>
				</footer>
				<div class="bg"></div>
			</nav>
		</div><!-- END #nav -->

		<div class="menu-toggle">
			<div class="icon-menu"></div>
			<div class="icon-cross"></div>
		</div>

	</div>
</header>  <!-- END header -->

<div id="content-main">
	<div class="inner">
		<?php if(isset($messages)): ?>
			<div id="messages"><?php echo $messages; ?></div>
		<?php endif; ?>

		<?php if(isset($tabs)): ?>
			<div id="tabs"><?php echo render($tabs); ?></div>
		<?php endif; ?>

		

		<div id="content">
			<?php print render($page['content']); ?>
		</div>
	</div>
</div>

<footer id="footer-main">
	<div class="contact">
		<div class="email"><a href="mailto:mj@mjkimpictures.com">mj@mjkimpictures.com</a></div>
		<div class="phone">+1 310 210 5575 (US)</div>
		<div class="phone">+44 7771 939 487 (UK)</div>
		<div class="phone">+82 10 7531 0303 (S.Korea)</div>
		<div class="social-icons">
			<a href="http://twitter.com/mjkim_lalala" class="icon-twitter" target="_blank"></a>
			<a href="http://instagram.com/mjkim_lalala" class="icon-instagram" target="_blank"></a>
			<a href="http://facebook.com/mjkimpictures" class="icon-facebook" target="_blank"></a>
		</div>		
	</div>

	<div class="copy">
		&copy; <?php echo date('Y'); ?> MJ Kim Pictures &mdash; Don't Steal. It's not nice.
	</div>
</footer>

<div id="loader">
	<img src="/<?php echo path_to_theme(); ?>/images/loader.png" alt="">
</div>
