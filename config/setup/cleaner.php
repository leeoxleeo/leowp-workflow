<?php 
/**
* @package LeoWP-Workflow
* @author Leonardo Pereira <leonardo@leowpdeveloper.com.br>
*/
?><?php
if( !function_exists('leowpCleaner') ):
    /**
     * <b>leowpCleaner()</b>
     * Funções para limpar o código gerado pelo Wordpress no <head> do site
     * Função importante por motivos de segurança
     */
    function leowpCleaner(){
        remove_action('wp_head', 'rsd_link');
        remove_action('wp_head', 'wlwmanifest_link');
        remove_action('wp_head', 'start_post_rel_link', 10, 0);
        remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
        remove_action('wp_head', 'feed_links_extra', 3);
        remove_action('wp_head', 'wp_generator');
        remove_action('wp_head', 'print_emoji_detection_script', 7);
        remove_action('admin_print_scripts', 'print_emoji_detection_script');
        remove_action('wp_print_styles', 'print_emoji_styles');
        remove_action('admin_print_styles', 'print_emoji_styles');  
    }
    add_action( 'after_setup_theme', 'leowpCleaner' );
endif;