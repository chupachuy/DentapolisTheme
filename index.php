<?php get_header(); ?>
<div class="wrapper">
  <?php

    $query = new WP_query( 'pagename=banner');
    if( $query->have_posts()){
    while ( $query->have_posts()){
    $query->the_post(); ?>

    
      <?php if((get_post_meta( get_the_ID(), 'banner', true ) )){ ?>
        <div class="section section-hero section-shaped" style="background-image: url(<?php echo get_post_meta($post->ID, 'banner', true); ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
        <?php } else { ?>
          <div class="section section-hero section-shaped" style="background-image: url();">
        <?php } ?>
      <div class="shape shape-style-1 shape-primary">
        <span class="span-150"></span>
        <span class="span-50"></span>
        <span class="span-50"></span>
        <span class="span-75"></span>
        <span class="span-100"></span>
        <span class="span-75"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
        <span class="span-50"></span>
        <span class="span-100"></span>
      </div>
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-10 text-center">
                <div class="lead text-primary"><?php the_excerpt(); ?></div>
                <div class="btn-wrapper mt-5">
                  <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    <span class="btn-inner--text">Más información</span></a>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <?php }
      }
      wp_reset_postdata();
    ?>


    <!-- QUIENES SOMOS -->
    <?php
    $query = new WP_query( 'pagename=pagina-ejemplo');

    if( $query->have_posts()){
      while ( $query->have_posts()){
        $query->the_post(); ?>

    <div class="section section-components pb-0" id="section-components">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <!-- Basic elements -->
            <h2 class="mb-5">
              <span><?php the_title(); ?></span>
            </h2>
          </div>
        </div>
        <div class="row justify-content-center">
          
          <div class="col-md-12">
               <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Conoce más</a>
        </div>
      </div>
    </div>

    <?php }
      }
      wp_reset_postdata();
    ?>


    <!-- QUIENES SOMOS -->


    <!-- Productos -->

    <section class="section section-lg section-shaped mt-5" id="ortodoncia">
    <div class="shape shape-style-1 shape-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <!-- Basic elements -->
            <h2 class="mb-5">
              <span>Tratamientos de Ortodoncia - Alineación Dental </span>
        
            </h2> 
        <h5 class="text-white">
         <span>Si tus dientes están mal alineados o presentan espacios, un buen tratamiento de Ortodoncia es la solución para ese tipo sonrisa.</span> 
        </h5>
        <br />
          </div>
        </div>
        <div class="row">
          <?php
            $args  = array(
              'posts_per_page'  => 3,
              'category_name'        => 'Productos',
              'orderby'         => 'post_date',
              'order'           => 'ASC',
              'post_type'       => 'post',
              'post_status'     => 'publish',
              'suppress_filters' => true ); 
          $posts = get_posts($args);
              foreach ($posts as $post) :
          ?>
          <div class="col-md-4">
            <div class="card">
              <?php the_post_thumbnail();?>
              <div class="card-body">
                <h5 class="card-title"><?php the_title();?></h5>
                <?php if ((get_post_meta( get_the_ID(), 'price_full', true ) )) { ?>
                   <div class="product-price">
                     <h5>Precio: $<strong><?php echo get_post_meta($post->ID, 'price_full', true); ?></strong></h5>
                   </div>   
                <?php } elseif ((get_post_meta( get_the_ID(), 'price_from', true ) )) { ?>
                    <div class="product-price">
                     <h5>Desde: $<strong><?php echo get_post_meta($post->ID, 'price_from', true); ?></strong></h5>
                   </div>
                <?php } else { ?>
                    <div class="product-price">
                     <p>Otra Cosa</p>
                   </div>
                 <?php } ?>
                <div class="separar"></div>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Leer más</a>
              </div>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    
  </section>

  <!-- productos -->

  <!-- RESERVA TU CITA -->
    <div class="reserva-cita pt-3 pb-3 text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
          <h4 class="display-2">¡Reserva tu cita Ahora!</h4>
          </div>
          <div class="col-md-3">
            <button class="btn btn-lg btn-secondary btn-round" type="button">
              <span class="btn-inner--text">Agendar aqui </span>
              <span class="btn-inner--icon"><i class="ni ni-chat-round"></i></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- RESERVA TU CITA -->

    <!-- Compromisos Dentapolis -->

    <?php
      $query = new WP_query( 'pagename=compromisos-dentalopolis');
      if( $query->have_posts()){
        while ( $query->have_posts()){
      $query->the_post();
    ?>
    <section class="section section-components compromisos-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <h4 class="display-2"><?php the_title(); ?></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris.</p>
          </div>
        </div>
        <hr>
        <div class="separar"></div>
        <div class="row justify-content-center compromisos">
          <div class="col-md-4 text-center">
            <h4><strong><?php echo get_post_meta($post->ID, 'compromisos_one_title', true); ?></strong></h4>
            <img src="<?php echo get_post_meta($post->ID, 'compromisos_one_image', true); ?>" alt="">
            <p><?php echo get_post_meta($post->ID, 'compromisos_one_description', true); ?></p>
          </div>
          <div class="col-md-4 text-center">
            <h4><strong><?php echo get_post_meta($post->ID, 'compromisos_two_title', true); ?></strong></h4>
            <img src="<?php echo get_post_meta($post->ID, 'compromisos_two_image', true); ?>" alt="">
            <p><?php echo get_post_meta($post->ID, 'compromisos_two_description', true); ?></p>
          </div>
          <div class="col-md-4 text-center">
            <h4><strong><?php echo get_post_meta($post->ID, 'compromisos_three_title', true); ?></strong></h4>
            <img src="<?php echo get_post_meta($post->ID, 'compromisos_three_image', true); ?>" alt="">
            <p><?php echo get_post_meta($post->ID, 'compromisos_three_description', true); ?></p>
          </div>
        </div>
      </div>
    </section>
    <?php }
      }
      wp_reset_postdata();
    ?>

    <!-- Compromisos Dentapolis -->


    <!-- Basicos para tu sonrisa --> 

    <div class="section section-components pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
             <h2 class="mb-5">
              <span>Básicos para tu sonrisa </span>
        
            </h2> 
            <h5 class="text-black">
             <span><p>
               Si tus dientes están mal alineados o presentan espacios, un buen tratamiento de Ortodoncia es la solución para ese tipo sonrisa.
               </p></span> 
            </h5>
          </div>
        <br />
        </div>
        <div class="separar"></div>
        <div class="row justify-content-center">
          <?php
            $args  = array(
              'posts_per_page'  => 6,
              'category_name'        => 'basicos-para-tu-sonrisa',
              'orderby'         => 'post_date',
              'order'           => 'ASC',
              'post_type'       => 'post',
              'post_status'     => 'publish',
              'suppress_filters' => true ); 
          $posts = get_posts($args);
              foreach ($posts as $post) :
          ?>
          <div class="col-md-4">
            <div class="card">
              <?php the_post_thumbnail();?>
              <div class="card-body">
                <h5 class="card-title"><?php the_title();?></h5>
                <?php if ((get_post_meta( get_the_ID(), 'price_full', true ) )) { ?>
                   <div class="product-price">
                     <h5>Precio: $<strong><?php echo get_post_meta($post->ID, 'price_full', true); ?></strong></h5>
                   </div>   
                <?php } elseif ((get_post_meta( get_the_ID(), 'price_from', true ) )) { ?>
                    <div class="product-price">
                     <h5>Desde: $<strong><?php echo get_post_meta($post->ID, 'price_from', true); ?></strong></h5>
                   </div>
                <?php } else { ?>
                    <div class="product-price">
                     <p>Otra Cosa</p>
                   </div>
                 <?php } ?>
                 <div class="description-product ellipse">
                   <?php the_excerpt();?>
                 </div>
                <!--<a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Leer más</a>-->
              </div>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <div class="separar"></div>
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <button class="btn btn-icon btn-3 btn-success" type="button">
              <span class="btn-inner--icon"><i class="fa fa-whatsapp fa-2x"></i></span>
              <span class="btn-inner--text">Agenda una Consulta por Whatsapp</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="separar"></div>

    <!-- BANNER NUEVO CON FOTO -->

    <?php

    $query = new WP_query( 'pagename=banner-2');
    if( $query->have_posts()){
    while ( $query->have_posts()){
    $query->the_post(); ?>
    <?php if((get_post_meta( get_the_ID(), 'banner-2', true ) )){ ?>
    <section class="image-banner pt-5 pb-5" style="background-image: url(<?php echo get_post_meta($post->ID, 'banner-2', true); ?>); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <?php } else { ?>
    <section class="image-banner pt-5 pb-5" style="background-color: red;">
    <?php } ?>
      <div class="container text-center pt-3 pb-3">
        <div class="col-md-12">
          <div class="content-banner2">
            <h2 class="display-2"><strong><?php the_title(); ?></strong></h2>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>
    <?php }
      }
      wp_reset_postdata();
    ?>


    <!-- BANNER NUEVO CON FOTO -->

    <!-- Testimonials -->

  <section class="testimonials mt-5 mb-5 section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="mb-5">
              <span>Lo que dicen <strong>nuestros pacientes</strong> de Dentalopolis</span>
        
            </h2> 
        </div>
      </div>
    </div>
    <div class="container">
      <?php
      $slides = array(); 
      $args = array( 'category_name' => 'Testimonio', 'nopaging'=>true, 'posts_per_page'=>3 );
      $slider_query = new WP_Query( $args );
      if ( $slider_query->have_posts() ) {
          while ( $slider_query->have_posts() ) {
              $slider_query->the_post();
              if(has_post_thumbnail()){
                  $temp = array();
                  $thumb_id = get_post_thumbnail_id();
                  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
                  $thumb_url = $thumb_url_array[0];
                  $temp['title'] = get_the_title();
                  $temp['excerpt'] = get_the_excerpt();
                  $temp['image'] = $thumb_url;
                  $slides[] = $temp;
              }
          }
      } 
      wp_reset_postdata();
      ?>

      <?php if(count($slides) > 0) { ?>
            <div id="demo" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                  <?php $i=0; foreach($slides as $slide) { extract($slide); ?>
                  <div class="carousel-item <?php if($i == 0) { ?>active<?php } ?>">
                    <div class="carousel-caption">
                      <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code,
                          I don't know what will.This was the very best explanation of frameworks for brginners 
                          that I've ever seen.
                      </p>
                      <img src="<?php echo $image ?>" alt="<?php echo esc_attr($title); ?>">
                      <div id="image-caption"><?php echo $title; ?></div>
                    </div>   
                  </div>
                  <?php $i++; } ?>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <i class='fas fa-arrow-left'></i>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <i class='fas fa-arrow-right'></i>
                </a>
              </div>
        <?php } ?>
              
      </div>
    
  </section> 
    
    <!-- Testimonials -->
    
  </section>



<?php get_footer(); ?>