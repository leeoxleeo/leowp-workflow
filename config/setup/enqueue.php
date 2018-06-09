<?php
/**
 * @package LeoWP-Workflow
 * @author Leonardo Pereira <leonardo@leowpdeveloper.com.br>
 */
?><?php

    if (!function_exists('leowpScripts')) :
        function leowpScripts()
    {

        /**
         * Retira o jquery adicionado pelo Wordpress
         */
        wp_deregister_script('jquery');

        wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '', true);
        wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/dist/js/main.min.js', '', '', true);
        wp_enqueue_style('main-styles', get_stylesheet_directory_uri() . '/dist/css/style.min.css');
        wp_enqueue_style('main-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');


    }
    add_action('wp_enqueue_scripts', 'leowpScripts');
    endif;    