<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container-fluid p-0" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
  <script type="text/javascript">
    (function($) {

      /**
       * Copyright 2012, Digital Fusion
       * Licensed under the MIT license.
       * http://teamdf.com/jquery-plugins/license/
       *
       * @author Sam Sehnert
       * @desc A small plugin that checks whether elements are within
       *     the user visible viewport of a web browser.
       *     only accounts for vertical position, not horizontal.
       */

      $.fn.visible = function(partial) {
        
          var $t            = $(this),
              $w            = $(window),
              viewTop       = $w.scrollTop(),
              viewBottom    = viewTop + $w.height(),
              _top          = $t.offset().top,
              _bottom       = _top + $t.height(),
              compareTop    = partial === true ? _bottom : _top,
              compareBottom = partial === true ? _top : _bottom;
        
        return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

      };
        
    })(jQuery);

    jQuery(window).scroll(function(event) {
  
      jQuery(".main > div").each(function(i, el) {
        var el = jQuery(el);
        if (el.visible(true)) {
          el.addClass("come-in"); 
        } 
      });
      
    });

    // var win = jQuery(window);
    // var allMods = jQuery(".main > div");

    // // Already visible modules
    // allMods.each(function(i, el) {
    //   var el = jQuery(el);
    //   if (el.visible(true)) {
    //     el.addClass("already-visible"); 
    //   } 
    // });

    // win.scroll(function(event) {
      
    //   allMods.each(function(i, el) {
    //     var el = jQuery(el);
    //     if (el.visible(true)) {
    //       el.addClass("come-in"); 
    //     } 
    //   });
      
    // });
  </script>
</html>
