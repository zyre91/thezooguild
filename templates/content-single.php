<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(['panel', 'panel-default']); ?>>
    <header class="panel-heading clearfix">
      <h1 class="entry-title h5 pull-left"><?php the_title(); ?></h1>
      <div class="pull-right">
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="panel-body">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
