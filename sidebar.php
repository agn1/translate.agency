<?php
/**
 * @package WordPress
 * @subpackage Homework
 * 
 */
?>
<div id='sidebar'>	
<?php wp_nav_menu( array( 'theme_location' => 'sidebar' ) ); ?>
<div class"widget"><?php dynamic_sidebar( 'first' ); ?></div>
</div>