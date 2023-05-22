<?php if (have_rows("slides")) : ?>
	<section class="u-carousel">
		<div class="main-wrapper">
			<div class="u-carousel__control">
				<div class="u-carousel__container">
					<div class="u-carousel__inner swiper-wrapper">
						<?php while (have_rows("slides")) : the_row();
							$image = get_sub_field("image") ?? "";
							$title = get_sub_field("title") ?? "";
							$text = get_sub_field("text") ?? "";
							$link = get_sub_field("link") ?? "";
						?>
							<div class="u-carousel__slide swiper-slide">
								<div class="u-carousel__main">
									<div class="u-carousel__photo">
										<?php if ($image) : ?>
											<img class="u-carousel__img w-100 h-100 img-cover" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
											<?php include get_icons_directory('svg/cover.svg') ?>
										<?php endif; ?>
									</div>
									<div class="u-carousel__copy">
										<div class="u-carousel__print">
											<?php if ($title) : ?>
												<h3 class="u-carousel__title display-2"><?= $title ?></h3>
											<?php endif; ?>
											<?php if ($text) : ?>
												<div class="u-carousel__text"><?= $text ?></div>
											<?php endif; ?>
											<?php if ($link) : ?>
												<a class="u-carousel__link u-btn" href="<?= $link['url'] ?>"><?= $link['title'] ?></a>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="u-carousel__pagination d-flex d-flex-center u-text-center"></div>

				<!-- Add Navigation -->
				<div class="u-carousel__arrows">
					<div class="u-carousel__prev"><?php include get_icons_directory('icons/chevron-right.svg') ?></div>
					<div class="u-carousel__next"><?php include get_icons_directory('icons/chevron-right.svg') ?></div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>