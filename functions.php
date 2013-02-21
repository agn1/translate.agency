<?php
/**
 * @package WordPress
 * @subpackage Homework
 * 
 */
register_nav_menus( array(
    'nav' => __( 'Navigation', 'wp' )
) );
register_nav_menus( array(
    'sidebar' => __( 'first', 'wp' )
) );
register_sidebar( array(
'name' => 'first',
'id' => 'first',
'before_widget' => '<div id="%1$s" class="%2$s widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>'
) );
?>