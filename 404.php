<?php get_header(); ?>

<main class="leowp-404">
	
	<section class="leowp-container">
		<div class="leowp-container__center">
			
			<header class="leowp-heading">
				<h2 class="leowp-heading__title">Ops: Não encontramos essa página :/</h2>
				<p class="leowp-heading__tagline">Nossos conteúdos abaixo podem te ajudar?</p>
			</header>

			<div class="leowp-loop leowp-grid">
				<?php 
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 4
				);
				$notFoundPosts = new WP_Query($args); 
				?>
				<?php if( $notFoundPosts->have_posts() ): ?>
					<?php while( $notFoundPosts->have_posts() ): ?>
						<?php $notFoundPosts->the_post(); ?>
						<?php get_template_part( 'content/content-404' ); ?>
					<?php endwhile; ?>		
				<?php endif; ?>	
			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?>