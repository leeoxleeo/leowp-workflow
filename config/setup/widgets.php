<?php
/**
 * @package LeoWP-Workflow
 * @author Leonardo Pereira <leonardo@leowpdeveloper.com.br>
 */
?><?php
    if (!function_exists('leowpWidgets')) :
        function leowpWidgets(){
            register_sidebar(array(
                'name' => __('Barra Lateral', 'leowp-workflow'),
                'id' => 'leowp-sidebar',
                'description' => __('Os widgets adicionados aqui serão mostrados na barra lateral do site', 'leowp-workflow'),
                'before_widget' => '<article id="%1$s" class="leowp-sidebar__widget custom-widget %2$s"><div class="leowp-sidebar__widget--content">',
                'after_widget' => '</div></article>',
                'before_title' => '<h2 class="leowp-sidebar__widget--title">',
                'after_title' => '</h2>',
            ));
        }
    endif;    