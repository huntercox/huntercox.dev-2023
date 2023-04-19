<?php
// Main functions.php file of theme

/* WordPress */
require get_template_directory() . '/functions/wp/remove-comments.php';
require get_template_directory() . '/functions/wp/remove-svgs.php';
require get_template_directory() . '/functions/wp/remove-css.php';
require get_template_directory() . '/functions/wp/remove-emojis.php';

/* ACF */
require get_template_directory() . '/functions/acf/options.php';
require get_template_directory() . '/functions/acf/body-class.php';

/* Enqueues */
require get_template_directory() . '/functions/enqueues.php';

/* Base */
require get_template_directory() . '/functions/base/menus.php';
require get_template_directory() . '/functions/base/image-sizes.php';

/* Theme */
require get_template_directory() . '/functions/theme/template-conditions.php';
require get_template_directory() . '/functions/theme/breadcrumbs.php';

/* Theme > Admin */
require get_template_directory() . '/functions/theme/admin/employer-start-date-column.php';
