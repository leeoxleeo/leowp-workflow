<?php get_header(); ?>

<main class="leowp-single">
	
	<section class="leowp-container">
		<div class="leowp-container__center">

			<div class="leowp-loop">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('content/content-single'); ?>
					<?php endwhile; ?>		
				<?php endif; ?>		
			</div>

			<?php get_sidebar(); ?>

		</div>
	</section>

</main>  

<?php get_footer(); ?>