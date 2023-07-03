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
				</div>
			<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>