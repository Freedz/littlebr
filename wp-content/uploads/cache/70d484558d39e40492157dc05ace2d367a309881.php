<div class="container blogpost">
  <div class="row">
    <div class="col-md-4">
        <?php
          if ( has_post_thumbnail() ) {
              the_post_thumbnail('medium');
          }
          else {
              echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/default-blog-image.png" />';
          }
        ?>
    </div>
    <div class="col-md-8">
      <article <?php post_class() ?>>
        <header>
          <h4 class="entry-title"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h4>
          <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </header>
        <div class="entry-summary">
          <?php the_excerpt() ?>
        </div>
      </article>
    </div>
  </div>
</div>
