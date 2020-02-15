<header class="banner">
  <div class="container">
    <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'nav justify-content-center nav-fill',
          'container_class' => 'fixed-top',
          ]); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
