<nav class="header__nav-wrap">

    <h2 class="header__nav-heading h6"><?php echo _e("Site Navigation", "philosophy"); ?></h2>

    <?php 
      $headerMenu =   wp_nav_menu([
            'theme_location' => 'top-menu',
            'menu_class' => 'header__nav',
            'menu_id'   => 'header__nav',
            'echo'  => false,
        ]);

        $search = 'menu-item-has-children';
        $replace = 'menu-item-has-children has-children';

        $headerMenu = str_replace($search, $replace, $headerMenu);
        
        echo wp_kses_post($headerMenu); 
    ?>

    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php echo _e("Close", "philosophy"); ?></a>

</nav> <!-- end header__nav-wrap -->