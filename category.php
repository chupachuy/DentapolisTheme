<?php get_header(); ?>

<div class="wrapper mt-5">
	<section>
		<div class="container">
			<div class="container">
	        <div class="row justify-content-center">
	          <div class="col-lg-12">
	            <!-- Basic elements -->
	            <h2 class="mb-5">
	              <span><?php echo $category_name; ?></span>
	            </h2>
	          </div>
	        </div>
			<div class="row justify-content-center mb-4">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4">
		            <div class="card">
		              <?php the_post_thumbnail();?>
		              <div class="card-body">
		                <h5 class="card-title"><?php the_title();?></h5>
		                <?php the_excerpt();?>
		                <a href="<?php the_permalink(); ?>" class="btn btn-outline-info">Leer más</a>
		              </div>
		            </div>
		          </div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>


<?php get_footer(); ?>