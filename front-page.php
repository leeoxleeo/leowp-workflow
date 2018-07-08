<?php 
/**
 * Homepage do site
 * O arquivo front-page.php substitui o arquivo index.php como a página inicial do seu site
 */
?><?php get_header(); ?>

<main class="leowp-home">

	<section class="leowp-container">
		<div class="leowp-container__center">
			
			<header class="leowp-heading">
				<h2 class="leowp-heading__title">Últimos Posts</h2>
				<p class="leowp-heading__tagline">Conteúdos recentes do blog</p>
			</header>

			<div class="leowp-loop leowp-grid">
				<?php if( have_posts() ): ?>
					<?php while( have_posts() ): ?>
						<?php the_post(); ?>
						<?php get_template_part( 'content/content-home' ); ?>
					<?php endwhile; ?>		
				<?php endif; ?>		
			</div>

		</div>
	</section>

</main>  

<?php get_footer(); ?>