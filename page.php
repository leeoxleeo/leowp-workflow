<?php get_header(); ?>

<main class="leowp-page">
	
	<section class="leowp-container">
		<div class="leowp-container__center">
			
			<header class="leowp-heading">
				<h2 class="leowp-heading__title">Últimos Posts</h2>
				<p class="leowp-heading__tagline">Conteúdos recentes do blog</p>
			</header>

			<div class="leowp-loop">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('content/content-page'); ?>
					<?php endwhile; ?>		
				<?php endif; ?>		
			</div>

			<?php get_sidebar(); ?>

		</div>
	</section>

</main>  

<?php get_footer(); ?>