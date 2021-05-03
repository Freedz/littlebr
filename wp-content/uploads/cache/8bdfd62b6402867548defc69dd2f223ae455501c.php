<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(home_url('/')); ?>"><img src="<?= App\asset_path('images/logo-header-346x275.png'); ?>" width="150px"></a>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
