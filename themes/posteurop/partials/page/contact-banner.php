<?php

$title = get_sub_field("title") ?? "";
$text = get_sub_field("text") ?? "";
$link_one = get_sub_field("link_one") ?? "";
$link_two = get_sub_field("link_two") ?? "";

?>

<section class="c-banner p-relative">
	<div class="main-wrapper">
		<div class="c-banner__inner">
			<?php if ($title) : ?>
				<h3 class="c-banner__title display-2"><?= $title ?></h3>
			<?php endif; ?>
			<?php if ($text) : ?>
				<div class="c-banner__text"><?= $text ?></div>
			<?php endif; ?>
			<?php if ($link_one or $link_two) : ?>
				<div class="c-banner__buttons">
					<?php if ($link_one) : ?>
						<a class="c-banner__cta u-btn u-btn--blue" href="<?= $link_one['url'] ?>" target="<?= $link_one['target'] ? $link_one['target'] : "_self" ?>">
							<?= $link_one['title'] ?>
						</a>
					<?php endif; ?>
					<?php if ($link_two) : ?>
						<div class="c-banner__secondary">
							<a class="c-banner__cta u-btn-secondary u-btn-secondary--light" href="<?= $link_two['url'] ?>" target="<?= $link_two['target'] ? $link_two['target'] : "_self" ?>">
								<?= $link_two['title'] ?>
							</a>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<div class="c-banner__svg">
		<?php include get_icons_directory('svg/circle.svg') ?>
	</div>
</section>