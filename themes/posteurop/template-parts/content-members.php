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

$linkedin = get_field("members_linkedin") ?? "";
$twitter = get_field("members_twitter") ?? "";
$facebook = get_field("members_facebook") ?? "";
$youtube = get_field("members_youtube") ?? "";

$count = $count ?? "";
?>


<li class="our-members__li">
	<img src="<?= $logo['url'] ?>" alt="">
	<button type="button" data-quick-view>Quick view</button>
</li>
<li class="fullwidth is-hidden" id="quickview-<?= $count ?>">
	<button type="button" data-close>Close 2</button>
	<p><?= $title ?></p>
	<p>This grid item needs to stretch the full width of the page, and force other grid items to reflow around it, whilst remaining "visually connected" to the preceeding grid item.</p>
	<p>Test <a href="#">inline link</a>.</p>
</li>