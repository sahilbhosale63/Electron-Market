<?php
/**
 *
 * Materia Lite WordPress Theme by Iceable Themes | https://www.iceablethemes.com
 *
 * Copyright 2017 Mathieu Sarrasin - Iceable Media
 *
 * Navbar template
 *
 */

/* #nav-wrap */
?><div id="nav-wrap"><?php

$materia_responsive_menu = get_theme_mod( 'materia_mobile_menu', 'mobile' );

if ( $materia_responsive_menu == 'mobile' ):
 ?><span class="icefit-mobile-menu-open"><i class="fa fa-bars"></i></span><?php
endif;

?><div id="navbar" class="container"><?php

  wp_nav_menu( array(
    'container' => 'nav',
    'container_class' => 'navigation main-nav',
    'theme_location' => 'primary',
    'items_wrap' => '<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>',
    ) );
 if ( $materia_responsive_menu == 'dropdown' ):
    wp_nav_menu( array(
      'container' => '',
      'container_class' => '',
      'theme_location' => 'primary',
      'items_wrap'     => '<select id="dropdown-menu"><option value="">' . __('Menu', 'materia-lite') . '</option>%3$s</select>',
      'walker'  => new Materia_Walker_Nav_Menu_Dropdown(),
      ) );
endif;
 ?></div>

</div><?php // End #nav-wrap

if ( $materia_responsive_menu == 'mobile' ):
  ?><div id="icefit-mobile-menu"><?php
        echo '<span class="icefit-mobile-menu-close"><i class="fa fa-times-circle"></i></span>' . get_search_form( false );
        wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', ) );
    ?></div><?php
  endif;
