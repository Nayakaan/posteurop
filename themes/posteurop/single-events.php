<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package posteurop
 */


$date = get_field("events_date") ?? "";
$date_stamp = date_create($date);
$date_format = date_format($date_stamp, "j F Y");

$time_start = get_field("events_time_start") ?? "";
$time_end = get_field("events_time_end") ?? "";
$title = get_field("events_title") ?? "";
$location = get_field("events_location") ?? "";
$link = get_field("events_link") ?? "";

get_header();
?>

<main id="primary" class="site-main">
	<section class="even__main">
		<div class="even__banner">
			<div class="main-wrapper">
				<div class="event__inner text-white">
					<div class="event__details">
						<div class="event__details__innner">
							<div class="event__back">
								<a class="event__back-link u-btn-secondary u-btn-secondary--light u-btn-secondary--back" href="#">Back to all events</a>
							</div>
							<div class="event__date d-flex display-6">
								<div class="event__d"><?php echo $date_format ?></div>
								<div class="event__s"><?php echo $time_start ?></div>
								-
								<div class="event__e"><?php echo $time_end ?></div>
								<div class="event__c">CET</div>
							</div>
							<h1 class="event__title text-white display-2"><?php echo $title ?></h1>
							<div class="event__location display-6"><?php echo $location ?></div>
							<div class="event__link">
								<a class="event__cta u-btn u-btn--blue" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
							</div>
						</div>
					</div>
					<div class="event__additional">
						<div class="event__additional__inner">
							<ul class="event__ul list-reset">
								<?php if (have_rows("events_additional_info")) : ?>
									<?php while (have_rows("events_additional_info")) : the_row();
										$title = get_sub_field("title") ?? "";
										$text = get_sub_field("text") ?? "";
									?>
										<li class="event__li">
											<div class="event__li__title display-6"><?php echo $title ?></div>
											<div class="event__li__text"><?php echo $text ?></div>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="event__content">
			<?php posteurop_layout('partials_page', 'partials/page'); ?>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
