export default {
  init() {
    // JavaScript to be fired on all pages
    jQuery(document).ready(function($){
      $('.a2a_button_instagram').detach().appendTo('.a2a_kit.a2a_kit_size_40.a2a_floating_style.a2a_vertical_style');
      $('.container.widget.widget_a2a_follow_widget.newslettercontent').remove();
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
