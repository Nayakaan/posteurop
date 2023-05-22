<?php

$title = get_sub_field("title") ?? "";
$text = get_sub_field("text") ?? "";

?>

<section class="u-explore p-relative">
	<div class="main-wrapper">
		<div class="u-explore__inner">
			<?php if ($title) : ?>
				<h3 class="u-explore__title display-2"><?= $title ?></h3>
			<?php endif; ?>
			<?php if ($text) : ?>
				<div class="u-explore__text"><?= $text ?></div>
			<?php endif; ?>
			<?php if (have_rows("cards")) : ?>
				<ul class="u-explore__cards list-reset">
					<?php while (have_rows("cards")) : the_row();
						$icon = get_sub_field("icon") ?? "";
						$link = get_sub_field("link") ?? "";
					?>
						<?php if ($icon and $link) : ?>
							<li class="u-explore__li">
								<a class="u-explore__cta" href="<?= $link['url'] ?>" target="<?= $link['target'] ? $link['target'] : "_self" ?>">
									<img class="u-explore__img" src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
									<div class="u-explore__name"><?= $link['title'] ?></div>
								</a>
							</li>
						<?php endif; ?>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>

	<div class="u-explore__bg">
		<?php include get_icons_directory('svg/blue-round.svg') ?>
	</div>
</section>