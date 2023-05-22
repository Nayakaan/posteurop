<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package posteurop
 */

get_header();
?>

<main id="primary" class="posteurop__page site-main">

	<?php posteurop_layout('partials_page', 'partials/page'); ?>

</main><!-- #main -->

<?php

get_footer();
