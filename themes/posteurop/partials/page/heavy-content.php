<?php

$modifier = get_sub_field("modify_block") ?? [];
$title = get_sub_field("title") ?? "";
$text = get_sub_field("text") ?? "";
$link_one = get_sub_field("link_one") ?? "";
$link_two = get_sub_field("link_two") ?? "";
$image = get_sub_field("image") ?? "";

?>

<section class="<?php if (is_array($modifier)) {
									foreach ($modifier as $value) {
										echo (' ' . $value);
									}
								} ?> heavy-content">
	<div class="main-wrapper">
		<div class="heavy-content__inner">
			<div class="heavy-content__copy">
				<div class="heavy-content__box">
					<?php if ($title) : ?>
						<h2 class="heavy-content__title"><?php echo $title ?></h2>
					<?php endif; ?>
					<?php if ($text) : ?>
						<div class="heavy-content__text"><?php echo $text ?></div>
					<?php endif; ?>
					<?php if ($link_one or $link_two) : ?>
						<div class="heavy-content__button">
							<?php if ($link_one) : ?>
								<a href="<?= $link_one['url'] ?>" class="heavy-content__cta u-btn" target="<?= $link_one['target'] ? $link_one['target'] : "_self" ?>">
									<?= $link_one['title'] ?>
								</a>
							<?php endif; ?>
							<?php if ($link_two) : ?>
								<a href="<?= $link_two['url'] ?>" class="heavy-content__cta u-btn-secondary" target="<?= $link_two['target'] ? $link_two['target'] : "_self" ?>">
									<?= $link_two['title'] ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if ($image) : ?>
				<div class="heavy-content__image">
					<img class="heavy-content__img w-100 h-100 d-block img-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>