<?php

$title = get_sub_field("title") ?? "";
$text = get_sub_field("text") ?? "";

?>


<section class="intro-banner text-white">
	<div class="main-wrapper">
		<div class="p-relative">
			<div class="intro-banner__inner">
				<?php if ($title) : ?>
					<h1 class="intro-banner__title text-white"><?= $title ?></h1>
				<?php endif; ?>
				<?php if ($text) : ?>
					<div class="intro-banner__text line-medium"><?= $text ?></div>
				<?php endif; ?>

				<a class="intro-banner__dot" href="#">
					<div class="intro-banner__arrow"><?php include get_icons_directory('icons/arrow-down.svg') ?></div>
				</a>
			</div>
		</div>
	</div>
</section>