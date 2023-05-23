<?php

/**
 * Template part for displaying single members on archive page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

$logo = get_field("members_logo") ?? "";
$title = get_field("members_title") ?? "";
$description = get_field("members_description") ?? "";
$link = get_field("members_link") ?? "";
$image = get_field("members_image") ?? "";

$social_group = get_field('members_social_media');
$link_social = $social_group["memebrs_social_link"] ?? "";
$linkedin = $social_group["members_linkedin"] ?? "";
$twitter = $social_group["members_twitter"] ?? "";
$facebook = $social_group["members_facebook"] ?? "";
$youtube = $social_group["members_youtube"] ?? "";

$count = $count ?? "";
$terms_string = $terms_string ?? "";

?>


<li class="our-members__li" data-categories="all <?php echo $terms_string ?>">
	<a class="our-members__cta p-relative" data-quick-view>
		<img class="our-members__logo" src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
		<div class="our-members__drop">
			<?= $title ?>
		</div>
		<div class="our-members__svg">
			<?php include get_icons_directory('icons/chevron-down.svg') ?>
		</div>
	</a>
</li>
<li class="our-members__main fullwidth is-hidden p-relative" id="quickview-<?= $count ?>">
	<button class="our-members__close" type="button" data-close><?php include get_icons_directory('icons/close.svg') ?></button>
	<div class="our-members__image">
		<img class="our-members__img" src="<?= $image['url'] ?>" alt="<?= $image['url'] ?>">
	</div>
	<div class="our-members__content">
		<div class="our-members__title"><?= $title ?></div>
		<div class="our-members__social">
			<?php if ($link_social) : ?>
				<div>
					<a class="our-members__link our-members__direct" href="<?= $link_social['url'] ?>" target="<?= $link_social['target'] ? $link_social['target'] : "_self" ?>"><?= $link_social['title'] ?></a>
				</div>
			<?php endif; ?>
			<div class="d-flex d-flex-align-c">
				<?php if ($linkedin) : ?>
					<a class="our-members__link" href="<?= $linkedin['url'] ?>" target="<?= $linkedin['target'] ? $linkedin['target'] : "_self" ?>"><?php include get_icons_directory('svg/ilinkedin.svg') ?></a>
				<?php endif; ?>
				<?php if ($twitter) : ?>
					<a class="our-members__link" href="<?= $twitter['url'] ?>" target="<?= $twitter['target'] ? $twitter['target'] : "_self" ?>"><?php include get_icons_directory('svg/itwitter.svg') ?></a>
				<?php endif; ?>
				<?php if ($facebook) : ?>
					<a class="our-members__link" href="<?= $facebook['url'] ?>" target="<?= $facebook['target'] ? $facebook['target'] : "_self" ?>"><?php include get_icons_directory('svg/ifacebook.svg') ?></a>
				<?php endif; ?>
				<?php if ($youtube) : ?>
					<a class="our-members__link" href="<?= $youtube['url'] ?>" target="<?= $youtube['target'] ? $youtube['target'] : "_self" ?>"><?php include get_icons_directory('svg/iyoutube.svg') ?></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="our-members__text"><?= $description ?></div>
		<div class="our-members__button">
			<a class="u-btn" href="<?= $link['url'] ?>" target="<?= $link['target'] ? $link['target'] : "_self" ?>"><?= $link['title'] ?></a>
		</div>
	</div>
</li>