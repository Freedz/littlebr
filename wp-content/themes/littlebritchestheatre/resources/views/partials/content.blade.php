<div class="container blogpost">
  <div class="row">
    <div class="col-md-4">
        @php
          if ( has_post_thumbnail() ) {
              the_post_thumbnail('medium', ['class' => 'img-responsive responsive-full']);
          }
          else {
              echo '<img class="img-responsive responsive-full wp-post-image" src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/default-blog-image.png" />';
          }
        @endphp
    </div>
    <div class="col-md-8">
      <article @php post_class() @endphp>
        <header>
          <h4 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h4>
          @include('partials/entry-meta')
        </header>
        <div class="entry-summary">
          @php the_excerpt() @endphp
        </div>
      </article>
    </div>
  </div>
</div>
