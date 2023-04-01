<?php
get_header();
?>

<div class="page">
	<div class="container">
		<div class="page__header">
			<?php the_title('<h1 class="page__title">', '</h1>'); ?>
		</div>
		<div class="page__content">
			<?php the_content(); ?>
		</div>
	</div>
</div>

<section class="cta">
	<div class="container">
		<div class="cta__inner">
			<div class="cta__text">
				<div class="cta__text_inner">
					<div class="message-box">
						<p>Hey, did you know I can receive emails at my email inbox?</p>
					</div>
					<!-- <p>If you'd like, you can send me a message via my contact form.</p> -->
				</div>
			</div>
			<div class="cta__button">
				<a class="cta-link shadow-button" href="<?php echo get_permalink(10); ?>">Contact Me</a>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part('parts/dev', 'skills');
?>


<?php
get_footer();
