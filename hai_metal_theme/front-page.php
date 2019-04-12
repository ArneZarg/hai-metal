<?php get_header(); ?>
<!-- FRONT-PAGE.PHP -->
    <div><?php echo do_shortcode('[smartslider3 slider=3]')?></div>
    <center class="blurbs-section">
        <?php $frontPageHeading = new WP_Query(array(
            'post_type' => 'front_page_heading',
            'posts_per_page' => 1
        )); ?>
        <div class="row">
            <?php while($frontPageHeading->have_posts()){
                echo $frontPageHeading->the_post();
                ?>
            <div class="col">
                <h1><?php the_title(); ?></h1>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <?php
            $frontPageBlurbs = new WP_Query(array(
                'post_type' => 'blurb',
                'posts_per_page' => 3
            ));
         ?>
        <div class="container">
            <div class="row">
                <?php while($frontPageBlurbs->have_posts()) {
                    echo $frontPageBlurbs->the_post();
                ?>
                <div class="col blurb">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </center>
    <center>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Our Clients</h2>
                </div>
            </div>
            <?php $ourClients = new WP_Query(array(
                'post_type' => 'our_clients',
                'posts_per_page' => 3
            )); ?>
            <div class="row">
                
                <div class="col">
                    <?php while($ourClients->have_posts()){
                    echo $ourClients->the_post();
                ?>
                    <img class="client-pics" src="<?php the_field('logo') ?>">
                    <?php } wp_reset_postdata(); ?>
                </div>
            
            </div>
        </div>
    </center>
    
    <!-- /FRONT-PAGE.PHP -->
    <?php get_footer(); ?>