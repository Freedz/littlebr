<div class="post-content-area col-md-8 col-xl-6">
    
    <div class="the-post-thumbnail">
      <?php the_post_thumbnail('medium', ['class' => 'img-responsive responsive-full']); ?>
    </div>
    <?php 
    the_content() 
    ?>
    <br/>
    <br/>
    <footer>
      <?php echo wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

    </footer>
    <?php 
      if(has_category("blog"))
      {
        comments_template('/partials/comments.blade.php');
      }
    ?>
</div>
