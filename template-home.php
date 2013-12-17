<?php
/*
Template Name: Home template
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php query_posts($query_string . '&cat=announcement'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="panel panel-default">
 <header class="panel-heading">
  <?php the_title() ?>
 </header>
 <section class="panel-body">
  <?php the_content() ?>
 </section>
</article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
