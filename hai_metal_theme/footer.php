<!-- FOOTER.PHP -->
    <footer>
        <center>
            <div class="container footer-div">
                <div class="row">
                    <?php 
                        $addressInfo = new WP_Query(array(
                            'post_type' => 'address_information',
                            'posts_per_page' => 1
                        ));

                        while($addressInfo->have_posts()){
                            echo $addressInfo->the_post();
                    ?>
                    <div class="col footer-info">
                        <h3>HAI METAL</h3>
                        <p><?php the_field('address') ?></p>
                        <p><?php the_field('city') ?> <?php the_field('state') ?> <?php the_field('zip_code') ?></p>
                        <p><?php the_field('country') ?></p>
                    </div>
                    <?php } wp_reset_postdata(); ?>
                    <div class="col footer-info">
                        <h3>EXPLORE</h3>
                        <p><a href="<?php echo esc_url(site_url('')) ?>">HOME</a></p>
                        <p><a href="<?php echo esc_url(site_url('/about')) ?>">ABOUT</a></p>
                        <p><a>CATALOG</a></p>
                        <p><a href="<?php echo esc_url(site_url('/request-a-quote'))?>">REQUEST A QUOTE</a></p>
                    </div>
                    <?php
                        $contactInfo = new WP_Query(array(
                          'post_type' => 'contact_information',
                          'posts_per_page' => 1
                        ));

                        while($contactInfo->have_posts()){
                          echo $contactInfo->the_post();
                    ?>
                    <div class="col footer-info">
                        <h3>CONTACT</h3>
                        <p><a href="mailto:<?php the_field('email') ?>">Email: <?php the_field('email') ?></a></p>
                        <p><a href="tel: <?php the_field('phone_number') ?>">Phone: <?php the_field('phone_number') ?></p>
                        <p>Fax: <?php the_field('fax_number')?></p>
                    </div>
                <?php } wp_reset_postdata(); ?>
                </div>
            </div>
        </center>
    </footer>
    <!-- /FOOTER.PHP -->
    <?php wp_footer(); ?>
</body>
