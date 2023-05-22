<section class="our-members">
	<div class="main-wrapper">
		<div class="our-members__inner">
			<ul class="our-members__grid our-members__ul">

				<?php
				$our_members = new WP_Query(array(
					'posts_per_page' => -1,
					'post_type' => 'our-members',
				));
				$count = 1;

				while ($our_members->have_posts()) {
					$our_members->the_post();
					$current_id = $post->ID;

					echo nb_load_template_part('template-parts/content-members', [
						'count' => $count,
						'post_id' => $current_id
					]);

					$count++;
				} ?>

			</ul>
		</div>
	</div>
</section>