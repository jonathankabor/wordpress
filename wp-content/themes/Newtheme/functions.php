    <?php
    add_action('after_setup_theme', function () {
       add_theme_support('title-tag');
    });

    function newtheme_supports (){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    function newtheme_register_assets(){
        wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
        wp_register_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
        wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');
    }

    function newtheme_title_separator(){
        return '|';
    }

    add_action('after_setup_theme', 'newtheme_supports');
    add_action('wp_enqueue_scripts', 'newtheme_register_assets');
    add_filter('document_title_separator', 'newtheme_title_separator');
