</div>
<footer>
    <?php
    wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'navbar-nav mr-auto'
    ]);
    the_widget(YoutubeWidget::class, [ 'youtube' => '7bOptq-NPJQ']);

    ?>
</footer>
<div>
    <?= get_option('agence_horaire')?>
</div>
    <?php wp_footer() ?>
</body>
</html>