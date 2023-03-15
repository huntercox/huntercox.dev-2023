<?php
get_header();

?>
<main class="page">
	<div class="page__header">
		<?php the_title('<h1 class="page__title">', '</h1>'); ?>
	</div>
	<div class="page__content">
		<?php the_content(); ?>
	</div>
</main>
<?php
get_footer();
