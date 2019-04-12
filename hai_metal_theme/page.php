<?php get_header(); ?>
<center class="blurbs-section">
        <div class="row">
        	<div class="col">
        		<h1><?php the_title(); ?></h1>
        	</div>
        </div>
        <div class="row">
        	<div class="col">
        		<div class="container">
        			<div class="generic-content"><?php the_content(); ?></div>
        		</div>
        	</div>
        </div>
</center>
<?php get_footer(); ?>