<!doctype html>
<html <?php echo get_language_attributes(); ?>>
  <?php echo $__env->make('partials.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body <?php body_class() ?>>
    <?php do_action('get_header') ?>
    <?php echo $__env->make('partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="wrap container-fluid p-0" role="document">
      <div class="content">
        <main class="main">
          <?php echo $__env->yieldContent('content'); ?>
        </main>
      </div>
    </div>
    <?php do_action('get_footer') ?>
    <?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php wp_footer() ?>
  </body>
  <script type="text/javascript">
    (function($) {

      /**
       * Copyright 2012, Digital Fusion
       * Licensed under the MIT license.
       * http://teamdf.com/jquery-plugins/license/
       *
       * @author  Sam Sehnert
       * @desc  A small plugin that checks whether elements are within
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
