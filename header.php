<?php
// HEADER
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Amiri:wght@700&family=Raleway:wght@400&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <div class="container">
            <h1 class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <nav class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container'      => 'nav',
                    'menu_class'     => 'nav-menu',
                ));
                ?>
            </nav>
        </div>
    </header>
</body>
</html>
