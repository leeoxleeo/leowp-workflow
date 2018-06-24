<article class="leowp-loop__post">
	<header class="leowp-loop__post--title">
		<h1><?php the_title(); ?></h1>
		<div class="leowp-loop__post--thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
	</header>
	<div class="leowp-loop__post--content">
		<?php the_content(); ?>
	</div>
</article>