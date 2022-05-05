<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
      

        <?php wp_head();?>
    </head>
    <body <?php body_class()?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="<?php echo get_template_directory_uri()?>/img/profile.jpg" alt="Volton">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">Volton</h3>
                                <p class="profile-description">Digital Photographer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
                        <li><a href="#projects"><i class="fa fa-newspaper-o"></i>My Gallery</a></li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                <?php $imagefff = get_field( 'imagefff', 'option' ); ?>
                <?php if ( $imagefff ) : ?>
                    <img src="<?php echo esc_url( $imagefff['url'] ); ?>" alt="<?php echo esc_attr( $imagefff['alt'] ); ?>" />
                <?php endif; ?>
                </div>
                <h3 class="profile-title"><?php the_field( 'namefdsffsd', 'option' ); ?></h3>
                <p class="profile-description"><?php the_field( 'designationff', 'option' ); ?></p>
            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
                    <li><a href="#about"><i class="fa fa-pencil"></i>About Me</a></li>
                    <li><a href="#projects"><i class="fa fa-paperclip"></i>My Gallery</a></li>
                    <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li>
                </ul>
            </div> <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                    <!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li> -->


                    <?php if ( have_rows( 'social_section', 'option' ) ) : ?>
                        <?php while ( have_rows( 'social_section', 'option' ) ) : the_row(); ?>
                        <li><a href="<?php the_sub_field( 'link' ); ?>"><i class="fa <?php the_sub_field( 'iconee' ); ?>"></i></a></li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <?php // no rows found ?>
                    <?php endif; ?>
                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
        
        <?php $background_image = get_field( 'background_image', 'option' ); ?>
        <div class="banner-bg" id="top" style="background:url('<?php echo esc_url( $background_image['url'] ); ?>')">
            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2><?php the_field( 'title', 'option' ); ?></h2>
                <h5><?php the_field( 'description', 'option' ); ?></h5>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                    <!-- ABOUT -->
                    <div class="page-section" id="about">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title"><?php the_field( 'titlefds', 'option' ); ?></h4>
                            <div class="about-image">
                               
                                <?php $imagedfd = get_field( 'imagedfd', 'option' ); ?>
                                <?php if ( $imagedfd ) : ?>
                                    <img src="<?php echo esc_url( $imagedfd['url'] ); ?>" alt="<?php echo esc_attr( $imagedfd['alt'] ); ?>" />
                                <?php endif; ?>
                               
                                
                            </div>
                            <p><?php the_field( 'descripfdssfdtion', 'option' ); ?></p>
                            <hr>
                        </div>
                    </div> <!-- #about -->
                    </div>
                    
                    <!-- PROJECTS -->
                    <div class="page-section" id="projects">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title"><?php the_field( 'titlertygtyyt', 'option' ); ?></h4>
                            <p><?php the_field( 'descriptiondddd', 'option' ); ?></p>
                        </div>
                    </div>
                    <div class="row projects-holder">




                        <?php

                            $args = array(
                                'post_type' => 'gallery',
                                'posts_per_page' => 6
                            );
                            $query = new WP_Query($args);
                            while( $query -> have_posts() ) {
                                $query -> the_post();
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="project-item">
                                    <?php the_post_thumbnail()?>
                                    <div class="project-hover">
                                        <div class="inside">
                                            <h5><a href="#"><?php the_title();?></a></h5>
                                            <p><?php the_excerpt()?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            wp_reset_postdata();
                            
                        ?>
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri()?>/img/2.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri()?>/img/3.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri()?>/img/4.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri()?>/img/5.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="<?php echo get_template_directory_uri()?>/img/6.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->




                    </div> <!-- .projects-holder -->
                    </div>
                    <hr>

                    <!-- CONTACT -->
                    <div class="page-section" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title"><?php the_field( 'titledfass', 'option' ); ?></h4>
                            <p><?php the_field( 'descriptionsafsdafdsf', 'option' ); ?></p>
                        </div>
                    </div>
                    <div class="row">


                        <div action="#" method="post" class="contact-form">


                            <!-- <fieldset class="col-md-4 col-sm-6">
                                <input type="text" id="your-name" placeholder="Your Name...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="email" id="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-12">
                                <input type="text" id="your-subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" value="Send Message">
                            </fieldset> -->

                            <?php echo do_shortcode('[contact-form-7 id="64" title="Contact form 1"]')?>


                        </div>



                    </div> <!-- .contact-form -->
                    </div>
                    <hr>

                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text"><?php the_field( 'footer_text', 'option' ); ?></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <?php wp_footer()?>
    </body>
</html>