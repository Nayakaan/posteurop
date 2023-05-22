<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package posteurop
 */

?>

<footer class="p-footer bg-blue">
	<div class="main-wrapper">
		<div class="p-footer__inner">
			<div class="p-footer__social">
				<div class="p-footer__logo"><?php include get_icons_directory('svg/logo-white.svg') ?></div>
				<div class="p-footer__icons d-flex d-flex-align-c">
					<a href="#" class="p-footer__icon"><?php include get_icons_directory('svg/linkedin.svg') ?></a>
					<a href="#" class="p-footer__icon"><?php include get_icons_directory('svg/twitter.svg') ?></a>
					<a href="#" class="p-footer__icon"><?php include get_icons_directory('svg/facebook.svg') ?></a>
					<a href="#" class="p-footer__icon"><?php include get_icons_directory('svg/youtube.svg') ?></a>
				</div>
			</div>
			<div class="p-footer__links text-white">
				<ul class="p-footer__ul list-reset">
					<li class="p-footer__li">
						<div class="p-footer__head f-600">About us</div>
						<a href="#" class="p-footer__cta">List item 1</a>
						<a href="#" class="p-footer__cta">List item 2</a>
						<a href="#" class="p-footer__cta">List item 3</a>
						<a href="#" class="p-footer__cta">List item 4</a>
					</li>
				</ul>
				<ul class="p-footer__ul list-reset">
					<li class="p-footer__li">
						<div class="p-footer__head f-600">Activities</div>
						<a href="#" class="p-footer__cta">List item 1</a>
						<a href="#" class="p-footer__cta">List item 2</a>
						<a href="#" class="p-footer__cta">List item 3</a>
					</li>
				</ul>
				<ul class="p-footer__ul list-reset">
					<li class="p-footer__li">
						<div class="p-footer__head f-600">Sustainability</div>
						<a href="#" class="p-footer__cta">List item 1</a>
						<a href="#" class="p-footer__cta">List item 2</a>
						<a href="#" class="p-footer__cta">List item 3</a>
						<a href="#" class="p-footer__cta">List item 4</a>
					</li>
				</ul>
				<ul class="p-footer__ul list-reset">
					<li class="p-footer__li">
						<div class="p-footer__head f-600">Campaigns</div>
						<a href="#" class="p-footer__cta">List item 1</a>
						<a href="#" class="p-footer__cta">List item 2</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="p-footer__bottom text-white">
			<div class="p-footer__trademark">&copy; POSTEUROP</div>
			<div class="p-footer__privacy">
				<div class="p-footer__box">
					<a href="#" class="p-footer__link">Privacy policy</a>
				</div>
				<div class="p-footer__box">
					<a href="#" class="p-footer__link">Cookie policy</a>
				</div>
				<div class="p-footer__box">
					<a href="#" class="p-footer__link">Terms of use</a>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>