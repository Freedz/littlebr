<div class="whatson-content-area col-md-8 col-xl-6">
    <ul class="cattab">
        <li class="tabs"><a href="#" class="production-tabs">Production</a></li>
        <li class="tabs"><a href="#" class="event-tabs">Events</a></li>
    </ul>
    <div style="clear: both"></div>
    <div>
        @php
            $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
            $cats = (isset($_GET['cat'] )) ? sanitize_text_field( $_GET['cat'] ) : "production,events";
            $args = array( 
                'post_type' => 'post', 
                'posts_per_page' => 10, 
                'post_status' => 'publish', 
                'category_name' => $cats,
                'paged' => $paged);
            $the_query = new WP_Query( $args );
        @endphp

        @if ( $the_query->have_posts() )
        <ul class="post-lists">
            @php while ( $the_query->have_posts() ) : $the_query->the_post(); @endphp
                @php
                        $categories = get_the_category();
                @endphp
                <li class="{{ esc_html( $categories[0]->name ) }}">
                    @php
                      if ( has_post_thumbnail() ) {
                          the_post_thumbnail('full', ['class' => 'img-responsive responsive-full']);
                      }
                      else {
                          echo '<img class="img-responsive responsive-full wp-post-image" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/default-blog-image.png" />';
                      }
                    @endphp

                    <p class="contentp">{{ get_the_date() }}</p>
                    @php
                        if ( ! empty( $categories ) ) {
                            echo '<p>Category: <a class="contentpa" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></p>';
                        }
                    @endphp

                    <p style="text-align: center; margin: 10px;"><a href="{{ get_permalink() }}" class="btn btn-default read-more">Read More</a></p>
                </li>
            @php endwhile;
            wp_reset_postdata(); @endphp
        </ul>
        <div style="clear: both"></div>

        <p style="text-align: center; color: #cc215b">
        @php 
            echo paginate_links( array(
                'total' => $the_query->max_num_pages,
                'mid_size' => 2
            ));
        @endphp
        </p>
        @else
            @php
                wp_redirect( get_the_permalink() . '?cat=' . $cats); exit;
            @endphp
        @endif
    </div>
<div style="clear:both"></div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".production-tabs").click(function(e){
            e.preventDefault();
            jQuery(".Events").fadeOut(1000);
            jQuery(".Production").fadeIn(1000);
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('cat', 'production');
            urlParams.delete('page');
            window.location.search = urlParams;
        });

        jQuery(".event-tabs").click(function(e){
            e.preventDefault();
            jQuery(".Events").fadeIn(1000);
            jQuery(".Production").fadeOut(1000);
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('cat', 'events');
            urlParams.delete('page');
            window.location.search = urlParams;
        });
    });
</script>
