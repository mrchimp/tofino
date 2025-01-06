<?php
//  if (get_field('enable_cookie_notice', 'options')) {
//   \Tofino\Helpers\hm_get_template_part('../../plugins/tofino-cookie-notice/templates/tofino-cookie-notice');
//  } 
 
 ?>

<footer>
  <div class="container">
    <div class="w-full text-center"><?php

      if (has_nav_menu('footer_navigation')) : ?>
        <!-- Nav Menu --><?php
        wp_nav_menu([
          'menu'            => 'nav_menu',
          'theme_location'  => 'footer_navigation',
          'depth'           => 1,
          'menu_class'      => 'footer-nav',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        ]); ?>
        <!-- Close Nav Menu --><?php
      endif;

      $footer_text = get_field('footer_text', 'option');
      if ($footer_text) :
        echo do_shortcode($footer_text); // Shortcode wrapper function added to allow render of shortcodes added to theme theme options text field.
      endif; ?>

    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php Tofino\Init\alerts('bottom'); ?>

<?php do_action('tofino_after_footer'); ?>

</body>
</html>
