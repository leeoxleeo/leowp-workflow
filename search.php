<?php get_header(); ?>

<main class="leowp-search">
	
	<section class="leowp-container">
		<div class="leowp-container__center">
			
			<?php if( have_posts() ): ?>
				<header class="leowp-heading">
					<h2 class="leowp-heading__title"><?php printf( esc_html__( 'Mostrando Resultados Para: %s', 'leowp-workflow' ), '<strong>'.get_search_query().'</strong>' ); ?></h2>
				</header>

				<div class="leowp-loop">
					<?php while (have_posts()) : ?>
						<?php the_post(); ?>
						<?php get_template_part('content/content-search'); ?>
					<?php endwhile; ?>	
				</div>
			<?php else: ?>
				<header class="leowp-heading">
					<h2 class="leowp-heading__title"><?php printf( esc_html__( 'Ops: Não encontramos nada para o termo pesquisado :/' ) ); ?></h2>
					<p class="leowp-heading__tagline">Pesquise novamente utilizando o formulário abaixo.</p>
				</header>

				<div class="leowp-search__form">
					<?php get_search_form(); ?>
				</div>	
			<?php endif; ?>

		</div>
	</section>

</main>

<?php get_footer(); ?>