<?php
get_header(); ?>
<div class="container two-column">
  <div class="content-holder two-column">
    <h2><?= the_title(); ?></h2>
    <h5><?= the_date("M d, Y"); ?></h5>
    <p><?= $post->post_content; ?></p>
  </div><!-- .content_holder -->
  <aside class="two-column">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Sidebar") ) : ?>
    <?php endif;?>
  </aside>
</div><!-- .container -->
<?php get_footer(); ?>
