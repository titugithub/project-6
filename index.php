<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <!-- basic -->
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>gravitao</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="icon" href=" <?php echo get_template_directory_uri()?>/images/fevicon.png" type="image/gif" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?>/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?>/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?>/css/responsive.css">
      <!-- fevicon -->
     
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?>/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?>/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href=" <?php echo get_template_directory_uri()?>/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <?php wp_head();?>
   </head>
   <!-- body -->
   <body class="main-layout" <?php body_class()?>>
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader">
      

         <?php $logo = get_field( 'logo', 'option' ); ?>
         <?php if ( $logo ) : ?>
            <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
         <?php endif; ?>
      
         </div>

      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <ul class="informisition">
                        <li><a href="#"> <i class="fa fa-phone" aria-hidden="true"></i><?php the_field( 'number', 'option' ); ?></a></li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><?php the_field( 'email', 'option' ); ?>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="text-bg">
                     <h1><?php the_field( 'heading', 'option' ); ?></h1>
                     <a class="read_more" href="<?php the_field( 'button_link', 'option' ); ?>"><?php the_field( 'button_textdsdsd', 'option' ); ?></a>
                  </div>
               </div>
               <div class="col-md-5">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone" type="type" name="Phone">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message</textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- service -->
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><?php the_field( 'titlefff', 'option' ); ?></span>
                     </h2>
                     <p><?php the_field( 'subtitle', 'option' ); ?></p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">


               <div class="col-md-4">
               <?php if ( have_rows( 'service1', 'option' ) ) : ?>
                  <?php while ( have_rows( 'service1', 'option' ) ) : the_row(); ?>
                     <div class="service_box text_align_center">
                     <?php $service_1_image = get_sub_field( 'service_1_image' ); ?>
                     <?php if ( $service_1_image ) : ?> 
                        <div class="service_icon"><i><img src="<?php echo esc_url( $service_1_image['url'] ); ?>" alt="<?php echo esc_attr( $service_1_image['alt'] ); ?>" /></i></div>
                     <?php endif; ?>
                        
                        <h3><?php the_sub_field( 'service_1_title' ); ?></h3>
                        <p><?php the_sub_field( 'service_1_description' ); ?></p>
                     </div>
                <?php endwhile; ?>
               <?php endif; ?>
               </div>




               <?php if ( have_rows( 'service_2', 'option' ) ) : ?>
               <?php while ( have_rows( 'service_2', 'option' ) ) : the_row(); ?>


               <div class="col-md-4">
                  <div class="service_box text_align_center">
                     <div class="service_icon"><i>
                     <?php $service_2_image = get_sub_field( 'service_2_image' ); ?>
                     <?php if ( $service_2_image ) : ?>
                        <img src="<?php echo esc_url( $service_2_image['url'] ); ?>" alt="<?php echo esc_attr( $service_2_image['alt'] ); ?>" />
                     <?php endif; ?>
                     </i></div>
                     <h3>	<?php the_sub_field( 'service_2_title' ); ?></h3>
                     <p><?php the_sub_field( 'service_2_description' ); ?></p>
                  </div>
               </div>


               <?php endwhile; ?>
            <?php endif; ?>




               <?php if ( have_rows( 'service_3', 'option' ) ) : ?>
               <?php while ( have_rows( 'service_3', 'option' ) ) : the_row(); ?>


               <div class="col-md-4">
                  <div class="service_box text_align_center">
                     <div class="service_icon"><i>
                     <?php $service_3_image = get_sub_field( 'service_3_image' ); ?>
                     <?php if ( $service_3_image ) : ?>
                        <img src="<?php echo esc_url( $service_3_image['url'] ); ?>" alt="<?php echo esc_attr( $service_3_image['alt'] ); ?>" />
                     <?php endif; ?>
                     </i></div>
                     <h3>	<?php the_sub_field( 'service_3_title' ); ?></h3>
                     <p><?php the_sub_field( 'service_3_description' ); ?></p>
                  </div>
               </div>


               <?php endwhile; ?>
            <?php endif; ?>




               
            </div>
         </div>
      </div>
      
      <!-- end service -->
      <!-- we_are -->
      <div class="we_are">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage text_align_left">
                     <h2><?php the_field( 'titlefdgdfg', 'option' ); ?></span>
                     </h2>
                     <p><?php the_field( 'descriptionfdsfdsaf', 'option' ); ?></p>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="wedo_img">
                     <figure><?php $imagefsdfsdfdsf = get_field( 'imagefsdfsdfdsf', 'option' ); ?>
                     <?php if ( $imagefsdfsdfdsf ) : ?>
                        <img src="<?php echo esc_url( $imagefsdfsdfdsf['url'] ); ?>" alt="<?php echo esc_attr( $imagefsdfsdfdsf['alt'] ); ?>" />
                     <?php endif; ?></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end we_are -->
      <!-- choose -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><?php the_field( 'titlefffsdfsdf', 'option' ); ?></span>
                     </h2>
                     <p><?php the_field( 'subtitlefdfdsf', 'option' ); ?></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="chose_box_main">
                     <div class="row">


                        <div class="col-md-4">
                           <div class="choose_box text_align_center">
                              <i><img src="<?php echo get_template_directory_uri()?>/images/chose_icon1.png" alt="#"/></i>
                              <h3>24/7 Emergency</h3>
                              <p>It is a long established fact that a reader will be </p>
                           </div>
                        </div>


                        <div class="col-md-4">
                           <div class="choose_box text_align_center">
                              <i><img src="<?php echo get_template_directory_uri()?>/images/chose_icon2.png" alt="#"/></i>
                              <h3>Expert and Professional</h3>
                              <p>It is a long established fact that a reader will be </p>
                           </div>
                        </div>


                        <div class="col-md-4">
                           <div class="choose_box text_align_center">
                              <i><img src="<?php echo get_template_directory_uri()?>/images/chose_icon3.png" alt="#"/></i>
                              <h3>Satisfaction Guarantee</h3>
                              <p>It is a long established fact that a reader will be </p>
                           </div>
                        </div>

                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><?php the_field( 'titlefdsfsdffds', 'option' ); ?></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_slider" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption position_inhirt">
                                 <div class="testimo_text">
                                    <i>
                                    <?php $testimonial_1_image = get_field( 'testimonial_1_image', 'option' ); ?>
                                    <?php if ( $testimonial_1_image ) : ?>
                                       <img src="<?php echo esc_url( $testimonial_1_image['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_1_image['alt'] ); ?>" />
                                    <?php endif; ?>
                                    </i>
                                    <h3><?php the_field( 'testimonial_1_title', 'option' ); ?></h3>
                                    <i class="text_align_left di_block"><img src="<?php echo get_template_directory_uri()?>/images/left.png" alt="#"/></i>
                                    <p><?php the_field( 'testimonial_1_content', 'option' ); ?></p>
                                    <i class="text_align_right di_block"><img src="<?php echo get_template_directory_uri()?>/images/right.png" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption position_inhirt">
                                 <div class="testimo_text">
                                    <i>
                                    <?php $testimonial_1_image_copy = get_field( 'testimonial_1_image_copy', 'option' ); ?>
                                    <?php if ( $testimonial_1_image_copy ) : ?>
                                       <img src="<?php echo esc_url( $testimonial_1_image_copy['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_1_image_copy['alt'] ); ?>" />
                                    <?php endif; ?>
                                    </i>
                                    <h3><?php the_field( 'testimonial_1_title_copy', 'option' ); ?></h3>
                                    <i class="text_align_left di_block"><img src="<?php echo get_template_directory_uri()?>/images/left.png" alt="#"/></i>
                                    <p><?php the_field( 'testimonial_1_content_copy', 'option' ); ?></p>
                                    <i class="text_align_right di_block"><img src="<?php echo get_template_directory_uri()?>/images/right.png" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption position_inhirt">
                                 <div class="testimo_text">
                                    <i>
                                    <?php $testimonial_1_image_copy2 = get_field( 'testimonial_1_image_copy2', 'option' ); ?>
                                    <?php if ( $testimonial_1_image_copy2 ) : ?>
                                       <img src="<?php echo esc_url( $testimonial_1_image_copy2['url'] ); ?>" alt="<?php echo esc_attr( $testimonial_1_image_copy2['alt'] ); ?>" />
                                    <?php endif; ?>
                                    </i>
                                    <h3><?php the_field( 'testimonial_1_title_copy2', 'option' ); ?></h3>
                                    <i class="text_align_left di_block"><img src="<?php echo get_template_directory_uri()?>/images/left.png" alt="#"/></i>
                                    <p><?php the_field( 'testimonial_1_content_copy2', 'option' ); ?></p>
                                    <i class="text_align_right di_block"><img src="<?php echo get_template_directory_uri()?>/images/right.png" alt="#"/></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="cont">
                        <h3><?php the_field( 'headingfdsf', 'option' ); ?></span></h3>
                     </div>
                  </div>
                  <div class="col-md-8 offset-md-2">
                     <div class="bottom_form">


                        <h3><?php the_field( 'subheadingfdsf', 'option' ); ?></h3>
                        <!-- <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button> -->
                        <div class="">                    
                        <?php echo do_shortcode('[contact-form-7 id="89" title="Contact form 1"]')?>
                        </div>
                       

                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p><?php the_field( 'footer_text', 'option' ); ?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

     
      <!-- end footer -->
      <!-- Javascript files-->
      <script src=" <?php echo get_template_directory_uri()?>/js/jquery.min.js"></script>
      <script src=" <?php echo get_template_directory_uri()?>/js/popper.min.js"></script>
      <script src=" <?php echo get_template_directory_uri()?>/js/bootstrap.bundle.min.js"></script>
      <script src=" <?php echo get_template_directory_uri()?>/js/jquery-3.0.0.min.js"></script>
      <script src=" <?php echo get_template_directory_uri()?>/js/plugin.js"></script>
      <!-- sidebar -->
      <script src=" <?php echo get_template_directory_uri()?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src=" <?php echo get_template_directory_uri()?>/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src=" <?php echo get_template_directory_uri()?>/js/custom.js"></script>
      <?php wp_footer()?>
   </body>
</html>