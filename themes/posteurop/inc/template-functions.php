<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package posteurop
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function posteurop_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'posteurop_body_classes');

/**
 * Print SVG Directory
 */
function get_icons_directory($file)
{
	$dir = '/assets/src/icons/';
	return get_stylesheet_directory() . $dir . $file;
}

/**
 * Handle laytout builder
 */
function posteurop_layout($name = 'partials', $dir = 'partials')
{
	if (have_rows($name)) :
		while (have_rows($name)) : the_row();

			$builder = str_replace(
				'_',
				'-',
				get_row_layout()
			);

			get_template_part("{$dir}/{$builder}");

		endwhile;
	endif;
}


/**
 * NB LOAD TEMPLATE PART
 *
 * loads a template part using output buffering where you can
 * optionally include $data to be passed into template
 *
 * @param  string $template_name name of the template to be located
 * @param  array  $data          data to be passed into the template to be included
 */
function nb_load_template_part($template_name, $data = array())
{

	if (!strpos($template_name, '.php')) {
		$template_name = $template_name . '.php';
	}

	// Optionally provided an assoc array of data to pass to tempalte
	// and it will be extracted into variables
	if (is_array($data)) {
		extract($data);
	}

	ob_start();
	include(locate_template($template_name));
	$var = ob_get_contents();
	ob_end_clean();

	return $var;
}
