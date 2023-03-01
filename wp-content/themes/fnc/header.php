<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fabula Nova Crystallis</title>

    <link rel="stylesheet" href="/wp-content/themes/fnc/resources/css/reset.css">
    <link rel="stylesheet" href="/wp-content/themes/fnc/resources/css/screen.css">
</head>
<body <?php body_class(); ?>>

<header>
<?php

if( function_exists('the_custom_logo')) {
    the_custom_logo();
}

?>
</header>

<nav>

<?php

wp_nav_menu(

    array(

       'theme_location' => 'header-menu',
        'container_class' => 'header-nav'
    )

);

?>


</nav>