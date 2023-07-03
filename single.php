<?php get_header(); ?>

<div class="wrapper mt-5">
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-10">
					<div class="main-title">
						<h1 class="mb-0"><?php the_title(); ?></h1>
					</div>
          <div class="separar"></div>
          <div class="main-image">
            <?php the_post_thumbnail(); ?>
          </div>
					<div class="description mb-3 mt-5">
						<?php the_content(); ?>
					</div>
          <?php get_template_part('template', 'sharing-box'); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>

	<hr>

	<div class="section section-components pb-0" id="section-components">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <!-- Basic elements -->
            <h2 class="mb-5">
              <span>Noticias Relacionadas</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <?php
            global $post;
            $last_posts = get_posts(array(
            	'posts_per_page' => 3,
              'cat' => -7,
            	'orderby' => 'rand'
            ));
            foreach ( $last_posts as $post ) :
            setup_postdata( $post );
          ?>
          <div class="col-md-4">
            <div class="card">
              <?php the_post_thumbnail();?>
              <div class="card-body">
                <h5 class="card-title"><?php the_title();?></h5>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Leer más</a>
              </div>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
</div>


<?php get_footer(); ?>