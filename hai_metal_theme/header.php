<!DOCTYPE HTML>
<head>
	<!--DEBUG 1-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <meta name="viewport" content="width=device-width">
    <?php wp_head() ?>
</head>
<body id="body-div">
    <!--HEADER.PHP-->
    <center>
        <header id="header-div">
                <div class="row">
                    <div class="container">
                        <div class="col">
                            <img class="logo" src="<?php echo get_theme_file_uri('images/logo.png') ?>">
                        </div>
                        <?php 
                        $contactInfo = new WP_Query(array(
                          'post_type' => 'contact_information',
                          'posts_per_page' => 1
                        ));

                        while($contactInfo->have_posts()){
                          echo $contactInfo->the_post();
                         ?>
                        <div class="col head-contact">
                            Phone: <a href="tel: <?php the_field('phone_number') ?>"><?php the_field('phone_number') ?></a><br>
                            Fax: <?php the_field('fax_number')?><br>
                            Email: <a href="mailto:<?php the_field('email') ?>"><?php the_field('email') ?></a><br>
                        </div>
                      <?php } wp_reset_postdata(); ?>
                    </div>
                </div>
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-default menu">
                    <div class="container">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="no-margin collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li><a href="<?php echo esc_url(site_url('')) ?>">HOME</a></li>
                          <li><a href="<?php echo esc_url(site_url('/about')) ?>">ABOUT</a></li>
                          <li><a href="#">CATALOG</a></li>
                          <li><a href="<?php echo esc_url(site_url('/request-a-quote')) ?>">REQUEST A QUOTE</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
                </div>
            </div>
        </header>
    </center>
    <!-- /HEADER.PHP-->