<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"> -->

    <?php wp_head(); ?>
</head>
<body>
    <nav class="main-menu">
        <div class="head-logo">
            <?php the_custom_logo(); ?>

        </div>
        <div class="menu-items">

            <?php  wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav-menu'
                )); ?>
        </div>

        <div class="cl-btn">
            <button>Submit</button>
        </div>
    </nav>
</body>
</html>