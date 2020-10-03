    <?php


    function newtheme_supports (){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header','En tête du menu');
        register_nav_menu('footer','Pied de page');
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

    function newtheme_title_separator()
    {
        return '|';
    }

    function newtheme_menu_class(array $classes)
    {
        $classes[] = 'nav-item';
        return $classes;

    }
    function newtheme_menu_link_class($attrs)
    {
        $attrs['class'] = 'nav-link';
        return $attrs;

    }

    function newtheme_pagination(){
        $pages = paginate_links(['type' => 'array']);
        if ($pages === null){
            return;
        }
        echo '<nav aria-label="Pagination" class="my-4">';
        echo '<ul class="pagination">';
        foreach($pages as $page){
                $active = strpos($page, 'current') !== false;
                $class = 'page-item';
                if ($active){
                    $class .= ' active';
                }
                echo '<li class="'  . $class . '">';
                echo str_replace('page-numbers', 'page-link', $page);
                echo '</li>';
    }
        echo '</ul>';
        echo '</nav>';
    }

    add_action('after_setup_theme', 'newtheme_supports');
    add_action('wp_enqueue_scripts', 'newtheme_register_assets');
    add_filter('document_title_separator', 'newtheme_title_separator');
    add_filter('nav_menu_css_class', 'newtheme_menu_class');
    add_filter('nav_menu_link_attributes', 'newtheme_menu_link_class');
