
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
						<div class="email"><a href="mailto:studio@mjkimpictures.com">studio@mjkimpictures.com</a></div>
						<div class="phone">(323) 123-4567</div>
						<div class="social-icons">
							<a href="http://twitter.com/" class="icon-twitter" target="_blank"></a>
							<a href="http://instagram.com/" class="icon-instagram" target="_blank"></a>
							<a href="http://pinterest" class="icon-pinterest" target="_blank"></a>
						</div>		
					</div>

					<div class="copy">
						&copy; <?php echo date('Y'); ?> MJ Kim Pictures &mdash; Don't Steel. It's not nice.
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
		<div class="email"><a href="mailto:studio@mjkimpictures.com">studio@mjkimpictures.com</a></div>
		<div class="phone">(323) 123-4567</div>
		<div class="social-icons">
			<a href="http://twitter.com/" class="icon-twitter" target="_blank"></a>
			<a href="http://instagram.com/" class="icon-instagram" target="_blank"></a>
			<a href="http://pinterest" class="icon-pinterest" target="_blank"></a>
		</div>		
	</div>

	<div class="copy">
		&copy; <?php echo date('Y'); ?> MJ Kim Pictures &mdash; Don't Steal. It's not nice.
	</div>
</footer>

<div id="loader">
	<img src="/<?php echo path_to_theme(); ?>/images/loader.png" alt="">
</div>
