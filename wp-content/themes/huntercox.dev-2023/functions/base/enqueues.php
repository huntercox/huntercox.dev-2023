<?php
// Register styles/scripts for theme usage

/* Enqueue default theme stylesheet */
wp_register_style('hcdev2023-theme', 'style.css');

if (!is_admin()) {
	wp_enqueue_style('hcdev2023-theme');
}
