<footer>

<div class="contact">

<?php

wp_nav_menu(

    array(

       'theme_location' => 'footer-menu',
        'container_class' => 'footer-nav'
    )

);

?>

</div>

<div class="info">
    <p>Author: David Kirby 2023</p>
    <p>Date: <?php echo date('M d, Y'); ?></p>
</div>

</footer>
<?php wp_footer() ?>
</body>
</html>