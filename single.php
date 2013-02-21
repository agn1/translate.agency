<?php get_header(); ?>
<div id='main'>
	<div class='title'><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h2><?php the_title()?></h2>
	</div>
		<?php get_sidebar(); ?>
		<div id='content'>
  <?php the_content(' '); ?>
<?php comments_template(); ?>
   <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
		</div>
     <?php get_footer(); ?>
</div>