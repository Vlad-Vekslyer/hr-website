<?php
get_header(); ?>
<div class="container two-column">
  <div class="content-holder two-column">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php
        if(function_exists('bcn_display')) { bcn_display(); }
      ?>
    </div>
    <?php
      if($post->post_name === 'blog') {
        $args = array('post_type' => 'post');
      } else {
        $cat_slug = preg_replace('/[_\s]/i' , '-', single_cat_title('', false));
        $cat_slug = strtolower($cat_slug);
        $args = array(
          'post_type' => 'post',
          'category_name' => $cat_slug
        );
      }
      $query = new WP_Query($args);
      do_action('post_preview', $query);
    ?>
  </div><!-- .content_holder -->
  <aside class="two-column">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Sidebar") ) : ?>
    <?php endif;?>
  </aside>
</div><!-- .container -->
<?php get_footer(); ?>
