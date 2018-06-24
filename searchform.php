<?php $unique_id = esc_attr( uniqid('search-form') ); ?>

<form role="search" method="get" action="<?= esc_url(home_url('/')); ?>" class="leowp-form">
	<label for="<?= $unique_id ?>">
		<span class="screen-reader-text"><?php printf( esc_html__( 'Pesquisar Por:', 'label', 'leowp-workflow' ) ); ?></span>
		<input type="search" id="<?= $unique_id ?>" class="leowp-form__input" placeholder="<?= esc_attr_x('Pesquisar Por:', 'placeholder', 'leowp-workflow'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
	</label>
	<button class="leowp-button leowp-button__small leowp-button__blue" type="submit"><?php echo _x('Pesquisar', 'submit button', 'leowp-workflow'); ?></button>
</form>