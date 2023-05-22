<?php

$text = get_sub_field("text") ?? "";

?>

<section class="text-content">
	<div class="blog-wrapper">
		<div class="text-content__inner">
			<?php echo $text; ?>
		</div>
	</div>
</section>