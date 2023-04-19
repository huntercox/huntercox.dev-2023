<?php

/**
 * Template Name: Flexible Content
 */
get_header();
?>
<?php if (have_rows('flex_layouts')) : ?>
	<?php while (have_rows('flex_layouts')) : the_row(); ?>
		<?php if (get_row_layout() == 'hero') : ?>
			<?php
			$image = get_sub_field('image');
			$size = 'flex-hero';
			if ($image) :
				$img_src = wp_get_attachment_image_src($image, $size);
				echo '<div class="hero">';
				echo '<div class="parallax-window" data-bleed="10"  data-image-src="' . $img_src[0] . '" data-parallax="scroll" data-natural-width="1000" data-natural-height="300"></div>';
				echo '</div>';
			endif;
			?>
		<?php elseif (get_row_layout() == 'content') : ?>
			<?php the_sub_field('visual_editor'); ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
