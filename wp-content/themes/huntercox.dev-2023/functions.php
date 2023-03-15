<?php
// Main functions.php file of theme

/* WordPress */
require get_template_directory() . '/functions/wp/remove-comments.php';
require get_template_directory() . '/functions/wp/remove-svgs.php';

/* ACF */
require get_template_directory() . '/functions/acf/options.php';
require get_template_directory() . '/functions/acf/body-class.php';

/* Enqueues */
require get_template_directory() . '/functions/base/enqueues.php';

/* Menus */
require get_template_directory() . '/functions/base/menus.php';
