<article class="leowp-loop__post leowp-grid__three">
	<header class="leowp-loop__post--title">
		<h2><a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="leowp-loop__post--thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	</header>
	<div class="leowp-loop__post--excerpt">
		<?php the_excerpt(); ?>
	</div>
	<div class="leowp-loop__post--cta">
		<a href="<?php the_permalink(); ?>" class="leowp-button leowp-button__small leowp-button__blue">Continue Lendo</a>
	</div>	
</article>