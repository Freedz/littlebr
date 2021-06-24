<?php if ( is_active_sidebar( 'homeblog' ) ) : ?>
    <div class="page-bloghome come-in">
        <?php dynamic_sidebar( 'homeblog' ); ?>
        <div style="clear:both"></div>
    </div>
<?php endif; ?>
<div class="page-homewhatson">
    <?php
        $args = array( 
            'post_type' => 'post', 
            'posts_per_page' => 1, 
            'post_status' => 'publish', 
            'category_name' => 'productions');
        $the_query = new WP_Query( $args );
    ?>

    <?php if( $the_query->have_posts() ): ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div id="custom_html-3" class="widget_text container widget widget_custom_html whatsoncontent">
                <div class="blogtitle">
                    <h5 class="widget-title">What’s On</h5>
                </div>
                <div class="textwidget custom-html-widget">
                    <div class="row mt-5">
                        <div class="col-md-5">
                            <?php
                              if ( has_post_thumbnail() ) {
                                  the_post_thumbnail('full', ['class' => 'img-responsive responsive-full']);
                              }
                              else {
                                  echo '<img class="img-fluid" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/default-blog-image.png" />';
                              }

                              $postmeta = get_post_meta(get_the_ID(), 'slogan_text', TRUE);
                              if ($postmeta)
                              {
                                echo '<p class="cantwaitp">'. $postmeta .'</p>';
                              }
                            ?>
                        </div>
                        <div class="col-md-7">
                            <?php

                                $phrase = get_the_content();
                                $len = 160;
                                if (str_word_count($phrase) > $len) {
                                    $keys = array_keys(str_word_count($phrase, 2));
                                    $phrase = substr($phrase, 0, $keys[$len]);
                                }

                                echo force_balance_tags($phrase) . " ...";
                            ?>
                            <p class="text-center">
                                <a href="<?php echo e(get_permalink()); ?>" class="btn btn-default more btn-lg">More</a>
                            </p>
                      </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
    <?php endif; ?>
    <div style="clear:both"></div>
</div>


<?php if ( is_active_sidebar( 'homeblogcat' ) ) : ?>
    <div class="page-homeblogcat">
        <?php dynamic_sidebar( 'homeblogcat' ); ?>
        <div style="clear:both"></div>
    </div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'newsletter' ) ) : ?>
    <div class="page-newsletter">
        <?php dynamic_sidebar( 'newsletter' ); ?>
        <div style="clear:both"></div>
    </div>
<?php endif; ?>
