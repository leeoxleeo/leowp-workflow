<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn11" />
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="leowp__header" itemscope itemtype="http://schema.org/WPHeader">

    <div class="leowp__header--logo">
        <?php
        /** 
         * verifica se o logo foi adicionado pelo painel do wordpress 
         * caso não tenha logo, o nome do site será mostrado 
        */ 
        if( has_custom_logo() ):
            the_custom_logo();
        else:
            echo '<a href="'. SITE_HOME . '" class="leowp__header--logo-brand" title="' . SITE_NAME . '">' . SITE_NAME . '</a>';  
        endif;        
        ?>
    </div>

    <nav class="leowp__header--navigation">
       <?php
        if (has_nav_menu('primary')) :
            wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id' => 'primary-menu',
            'menu_class' => 'leowp__header--navigation-menu',
            'items_wrap' => '<ul class="leowp__header--navigation-menu">%3$s</ul>',
        ));
        endif;
        ?> 
    </nav>

</header>
