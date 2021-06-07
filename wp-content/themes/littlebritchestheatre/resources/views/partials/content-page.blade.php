<div class="content-area col-md-4">@php the_content() @endphp <div style="clear:both"></div></div>
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
