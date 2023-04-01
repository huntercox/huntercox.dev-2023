<?php
get_header();

?>
<div class="page">
	<div class="page__header">
		<div class="container">
			<div class="page__header--inner">
				<?php
				if (is_admin()) {
					the_title('<h1 class="page__title">', '</h1> (page)');
				} else {
					the_title('<h1 class="page__title">', '</h1>');
				}
				?>
			</div>
		</div>
	</div>
	<div class="page__content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
