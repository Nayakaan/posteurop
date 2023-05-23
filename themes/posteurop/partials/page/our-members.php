<?php
$our_members = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'our-members',
));

$cats = array();

while ($our_members->have_posts()) {
	$our_members->the_post();
	$post_categories = get_the_terms(get_the_ID(), 'types');
	$terms_array = wp_list_pluck($post_categories, 'name');

	foreach ($terms_array as $term) :
		$cats[] = array('name' => $term);
	endforeach;
}

$results = array_unique($cats, SORT_REGULAR);
?>

<section class="our-members">
	<div class="main-wrapper">
		<div class="our-members__inner">
			<div class="our-members__select">
				<select id="sel_val" class="js-members-select">
					<option value="all">All Countries</option>
					<?php foreach ($results as $result) { ?>
						<option value="<?php echo strtolower($result['name']); ?>"><?php echo $result['name'] ?></option>
					<?php } ?>
				</select>
			</div>

			<ul class="our-members__grid our-members__ul">
				<?php
				$count = 1;
				while ($our_members->have_posts()) {
					$our_members->the_post();
					$post_categories = get_the_terms(get_the_ID(), 'types');
					$terms_array = wp_list_pluck($post_categories, 'name');
					$terms_string = join(', ', $terms_array);

					echo nb_load_template_part('template-parts/content-members', [
						'count' => $count,
						'terms_string' => strtolower($terms_string)
					]);

					$count++;
				} ?>

			</ul>
		</div>
	</div>
</section>