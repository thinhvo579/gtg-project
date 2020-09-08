<?php  
    
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'page', 'excerpt' );

    //convert svg
    function add_file_types_to_uploads($file_types){
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        $file_types = array_merge($file_types, $new_filetypes );
        return $file_types;
    }
    add_action('upload_mimes', 'add_file_types_to_uploads');

    //add menu
    add_theme_support('menus');
    function register_my_menus() {
        $args = array( 
            'top-menu' => __( 'Top Menu' ),
            'bottom-menu' => __( 'Bottom Menu' ),
        );
        register_nav_menus( $args );
        }
    add_action( 'init', 'register_my_menus' ); 

    //hook class active li in menu
    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
    function special_nav_class ($classes, $item) {
        if (in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }

    //add wigets
    function php_text($text) {
        if (strpos($text, '<' . '?') !== false) {
        ob_start();
        eval('?' . '>' . $text);
        $text = ob_get_contents();
        ob_end_clean();
     }
     return $text;
     }
    add_filter('widget_text', 'php_text', 99);

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Phone',
            'id'   => 'phone-number',
            'description'   => 'This is a widgetized area.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Social',
            'id'   => 'social',
            'description'   => 'This is a widgetized area.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Location',
            'id'   => 'location',
            'description'   => 'This is a widgetized area.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Note',
            'id'   => 'note',
            'description'   => 'This is a widgetized area.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }


    //create post type services
    function  create_posttype()
    {
        $args = array(
          'label' => 'Services',//name of post type-Slide
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'rewrite' => array('slug' => 'services'),
            'query_var' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'taxonomies' => array( 'category', 'post_tag' ,),
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'trackbacks',
                'custom-fields',
                'comments',
                'revisions',
                'thumbnail',
                'author',
                'page-attributes',)
            );
        register_post_type( 'services', $args );

        

        
        
                         
    }
    add_action('init', 'create_posttype');

   // create taxonomy post type Service
    // function equipment_taxonomy() {
    //     $labels = array(
    //             'name' => 'Equipment Category',
    //             'singular' => 'Equipment Category',
    //             'menu_name' => 'Equipment Category'
    //     );
    //     $args = array(
    //             'labels'                     => $labels,
    //             'hierarchical'               => true,
    //             'public'                     => true,
    //             'show_ui'                    => true,
    //             'show_admin_column'          => true,
    //             'show_in_nav_menus'          => true,
    //             'show_tagcloud'              => true,
    //     );
    //     register_taxonomy('equipment-category', 'equipment', $args);   
    // }
    // add_action( 'init', 'equipment_taxonomy' );
    // //create taxonomy post type Blog
    // function blog_taxonomy() {
    //     $labels = array(
    //             'name' => 'Blog Category',
    //             'singular' => 'Blog Category',
    //             'menu_name' => 'Blog Category'
    //     );
    //     $args = array(
    //             'labels'                     => $labels,
    //             'hierarchical'               => true,
    //             'public'                     => true,
    //             'show_ui'                    => true,
    //             'show_admin_column'          => true,
    //             'show_in_nav_menus'          => true,
    //             'show_tagcloud'              => true,
    //     );
    //     register_taxonomy('blog-category', 'blog', $args);   
    // }
    // add_action( 'init', 'blog_taxonomy' );

    add_action( 'wp_footer', 'redirect_cf7' );
    function redirect_cf7() {
    ?>
    <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
           location = '<?php echo esc_url( home_url( '/thank-you' ) ); ?>';
    }, false );
    </script>
    <?php
    }
