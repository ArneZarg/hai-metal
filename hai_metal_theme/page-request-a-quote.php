<?php get_header(); ?>
	<center>
		<div class="row">
			<div class="col">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="generic-instructions"><?php the_content(); ?></div>
				</div>
			</div>
				<?php echo do_shortcode('[contact-form-7 id="81" title="Request a Quote"]'); ?>
		</div>
	</center>
<?php get_footer(); ?>