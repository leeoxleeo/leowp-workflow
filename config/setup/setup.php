<?php
/**
 * @package LeoWP-Workflow
 * @author Leonardo Pereira <leonardo@leowpdeveloper.com.br>
 */
?><?php
    if (!function_exists('leowpThemeSetup')) :
        function leowpThemeSetup()
    {
        load_theme_textdomain('leowp-workflow');
      /* Suportes necessários para o funcionamento do tema */
      // adiciona o título da página automaticamente
        add_theme_support('title-tag');
      // suporte para adicionar imagem destacada em posts/páginas
        add_theme_support('post-thumbnails');
      // suporte para adicionar links do feed automaticamente ao header
        add_theme_support('automatic-feed-links');
      // suporte para tags html5 nos elementos de formulário, pesquisa e galeria
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
        /**
         * suporte para diferentes tipos de formato para os posts
         * @link https://codex.wordpress.org/Post_Formats
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ));
      // suporte para adicionar logo personalizado ao tema
        add_theme_support('custom-logo', array(
            'height' => 82,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ));
      // suporte para adicionar e atualizar widgets em tempo real
        add_theme_support('customize-selective-refresh-widgets');
      // registro do menu principal do tema
        register_nav_menus(array(
            'primary' => esc_html__('Menu Principal', 'leowp-workflow'),
        ));
    }
    add_action('after_setup_theme', 'leowpThemeSetup');
    endif;