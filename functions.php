<?php

// CPT

$avisos = array(
        'labels' => array('name' => __( 'Avisos' ),'singular_name' => __( 'Produto' )),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'avisos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'excerpt')
        // 'taxonomies'         => array( 'region', 'discipline' )
);

register_post_type( 'avisos', $avisos );

$produtos = array(
        'labels' => array('name' => __( 'Produtos' ),'singular_name' => __( 'Produto' )),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'produtos', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
        // 'taxonomies'         => array( 'region', 'discipline' )
);

register_post_type( 'produtos', $produtos );

$faq = array(
        'labels' => array('name' => __( 'Faq' ),'singular_name' => __( 'Faq' )),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'faq', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'editor')
        // 'taxonomies'         => array( 'region', 'discipline' )
);

register_post_type( 'faq', $faq );

$lojas = array(
        'labels' => array('name' => __( 'Lojas' ),'singular_name' => __( 'Loja' )),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lojas', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'thumbnail', 'custom-fields' )
        // 'taxonomies'         => array( 'region', 'discipline' )
);

register_post_type( 'lojas', $lojas );

$assistencia_tecnica = array(
        'labels' => array('name' => __( 'Assistências Técnica' ),'singular_name' => __( 'Assistência Técnica' )),
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'assistencia_tecnica', 'with_front' => false ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 0,
        'supports'           => array( 'title', 'editor', 'custom-fields' )
        // 'taxonomies'         => array( 'region', 'discipline' )
);

register_post_type( 'assistencia_tecnica', $assistencia_tecnica );

// add categories to attachments  

function wptp_add_categories_to_attachments() {
      register_taxonomy_for_object_type( 'category', 'attachment' );
      register_taxonomy_for_object_type( 'category', 'produtos' );  
}  
add_action( 'init' , 'wptp_add_categories_to_attachments' ); 

// 

function remove_menus(){
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
}

add_action( 'admin_menu', 'remove_menus' );

// 

function sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}


// 

function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Suba a logo do Site'
    ));

    $wp_customize->add_setting( 'logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'logo_section',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'logo'
    )));   

    // 

    $wp_customize->add_panel( 'footer', array(
        'priority'       => 2,
        'capability'     => 'edit_theme_options',
        'title'          => __('Rodapé', 'themeslug')
    ));

    // 

    $wp_customize->add_section( 'contato', array(
        'title' => 'Contato',
        'priority' => 10,
        'panel' => 'footer'
    ));

    $wp_customize->add_setting( 'telefone' );

    $wp_customize->add_control('telefone',  array(
        'label' => 'Telefone',
        'section' => 'contato',
        'type' => 'text',
        'settings' => 'telefone'
    ));

    $wp_customize->add_setting( 'email' );

    $wp_customize->add_control('email',  array(
        'label' => 'Email',
        'section' => 'contato',
        'type' => 'text',
        'settings' => 'email'
    ));

    // 

    $wp_customize->add_section( 'suporte', array(
        'title' => 'Suporte',
        'priority' => 10,
        'panel' => 'footer'
    )); 

    $wp_customize->add_setting( 'suporte-txt' );  

    $wp_customize->add_control('suporte-txt',  array(
        'label' => 'Texto de Suporte',
        'section' => 'suporte',
        'type' => 'text',
        'settings' => 'suporte-txt'
    ));

    $wp_customize->add_setting( 'onde-comprar-txt' );  

    $wp_customize->add_control('onde-comprar-txt',  array(
        'label' => 'Texto de Onde Comprar',
        'section' => 'suporte',
        'type' => 'text',
        'settings' => 'onde-comprar-txt'
    ));

    

    $wp_customize->add_section( 'redes_sociais', array(
        'title' => 'Redes Sociais',
        'priority' => 10,
        'panel' => 'footer'
    ));

    $wp_customize->add_setting( 'facebook' );

    $wp_customize->add_control('facebook',  array(
        'label' => 'Facebook',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'facebook'
    ));

    $wp_customize->add_setting( 'twitter' );

    $wp_customize->add_control('twitter',  array(
        'label' => 'Twitter',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'twitter'
    ));

    $wp_customize->add_setting( 'instagram' );

    $wp_customize->add_control('instagram',  array(
        'label' => 'Instagram',
        'section' => 'redes_sociais',
        'type' => 'text',
        'sanitize_callback' => 'esc_url_raw',
        'settings' => 'instagram'
    ));
}

add_action( 'customize_register', 'themeslug_theme_customizer' );

function remove_customizer_settings( $wp_customize ){
  $wp_customize->remove_panel('nav_menus');
  $wp_customize->remove_section('static_front_page');
}
add_action( 'customize_register', 'remove_customizer_settings', 20 );

// 

function get_the_category_bytax( $id = false, $tcat = 'category' ) {
    $categories = get_the_terms( $id, $tcat );
    if ( ! $categories )
        $categories = array();

    $categories = array_values( $categories );

    foreach ( array_keys( $categories ) as $key ) {
        _make_cat_compat( $categories[$key] );
    }

    // Filter name is plural because we return alot of categories (possibly more than #13237) not just one
    return apply_filters( 'get_the_categories', $categories );
}

// 

function get_custom_field_data($key, $echo = false) {
    global $post;
    $value = get_post_meta($post->ID, $key, true);
    if($echo == false) {
        return $value;
    } else {
        echo $value;
    }
}

//

function hide_admin_bar() {
    wp_add_inline_style('admin-bar', '<style> html { margin-top: 0 !important; } </style>');
    return false;
}

add_filter( 'show_admin_bar', 'hide_admin_bar' );

//

function menu() {
  register_nav_menus(
    array(
      'header' => __( 'Header' )
    )
  );
}

add_action( 'init', 'menu' );

//

function updateNumbers() {
    global $wpdb;
    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";
    $pageposts = $wpdb->get_results($querystr, OBJECT);
    $counts = 0 ;
    if ($pageposts):
    foreach ($pageposts as $post):
    setup_postdata($post);
    $counts++;
    add_post_meta($post->ID, 'incr_number', $counts, true);
    update_post_meta($post->ID, 'incr_number', $counts);
    endforeach;
    endif;
}
 
add_action ( 'publish_post', 'updateNumbers' );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );

// 

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 600, 600 );

// 

update_option( 'siteurl', 'http://www.everyeletronicos.com.br/' );
update_option( 'home', 'http://www.everyeletronicos.com.br/' );

// 

require_once('class-tgm-plugin-activation.php');

function register_required_plugins() {
    $plugins = array(
        // This is an example of how to include a plugin pre-packaged with a theme.
        array(
            'name' => 'MultiPostThumbnails', // The plugin name.
            'slug' => 'multiple-post-thumbnails', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/multiple-post-thumbnails.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name' => 'contact-form-7.4.4.2', // The plugin name.
            'slug' => 'contact-form-7.4.4.2', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/contact-form-7.4.4.2.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name' => 'Yoast SEO', // The plugin name.
            'slug' => 'wordpress-seo', // The plugin slug (typically the folder name).
            'source' => get_template_directory_uri() . '/plugins/wordpress-seo.3.2.5.zip', // The plugin source.
            'required' => true, // If false, the plugin is only 'recommended' instead of required.
            'version' => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
            'force_activation' => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url' => '', // If set, overrides default API URL and points to an external URL.
        ),
    );

    /**
    * Array of configuration settings. Amend each line as needed.
    * If you want the default strings to be available under your own theme domain,
    * leave the strings uncommented.
    * Some of the strings are added into a sprintf, so see the comments at the
    * end of each line for what each argument will be.
    */
    $config = array(
        'default_path' => '', // Default absolute path to pre-packaged plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message' => '', // Message to output right before the plugins table.
        'strings' => array(
        'page_title' => __( 'Install Required Plugins', 'tgmpa' ),
        'menu_title' => __( 'Install Plugins', 'tgmpa' ),
        'installing' => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
        'oops' => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
        'notice_can_install_required' => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
        'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
        'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
        'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
        'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
        'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
        'install_link' => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
        'activate_link' => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
        'return' => __( 'Return to Required Plugins Installer', 'tgmpa' ),
        'plugin_activated' => __( 'Plugin activated successfully.', 'tgmpa' ),
        'complete' => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
        'nag_type' => 'updated' // Determines admin notice type – can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'register_required_plugins');

// 

if (class_exists('MultiPostThumbnails')) {
    for ($i=1;$i<13;$i++) {
        new MultiPostThumbnails(
            array(
                'label' => 'Featured Image '.$i,
                'id' => 'featured-image-'.$i,
                'post_type' => 'produtos'
            )
        ); 
    }
}

// 

if (isset($_GET['activated']) && is_admin()){
    $new_page_title = 'Home';
    $new_page_content = 'Home Page';
    $new_page_template = 'home.php'; 
    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if(!isset($page_check->ID)){
        $new_page_id = wp_insert_post($new_page);
        if(!empty($new_page_template)){
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
    $homeSet = get_page_by_title( 'Home' );
    update_option( 'page_on_front', $homeSet->ID );
    update_option( 'show_on_front', 'page' );    
}

// 

add_filter('wp_insert_post_data', 'mandatory_excerpt');
function mandatory_excerpt($data) {
     
  /** Run excerpts only on certain post types */
  $screen = get_current_screen();
  if ((isset($data['post_type'])) && (isset($_REQUEST['action']))) {
      
      $post_type=$data['post_type'];
      $post_type_slug_excerpt_required= 'produtos';
      $post_action=$_REQUEST['action'];
       
      if (($post_type_slug_excerpt_required == $post_type) && ('editpost' == $post_action)) {
         
        //This filter is processing the correct post type proceed
        $excerpt = $data['post_excerpt'];
         
        if (empty($excerpt)) {
            //No excerpt!
            if ($data['post_status'] === 'publish') {
                add_filter('redirect_post_location', 'excerpt_error_message_redirect', '99');
            }
            //Change to draft
            $data['post_status'] = 'draft';     
        }       
      }     
  }
  return $data;
}
 
function excerpt_error_message_redirect($location) {
  remove_filter('redirect_post_location', 'excerpt_error_message_redirect', '99');
  return add_query_arg('excerpt_required', 1, $location);
}
function excerpt_admin_notice() {
  if (!isset($_GET['excerpt_required'])) return;
 
  switch (absint($_GET['excerpt_required'])) {
    case 1:
      $message = 'Excerpt is required to publish a post.';
      break;
    default:
      $message = 'Unexpected error';
  }
 
  echo '<div id="notice" class="error"><p>' . $message . '</p></div>';
}

add_action('admin_notices', 'excerpt_admin_notice');
