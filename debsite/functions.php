<?php
//Adding styles and scripts

function add_styles_and_scripts(){
    wp_register_style("font-awesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",array(),1,'all');
    wp_enqueue_style("font-awesome");
    wp_register_style("bootstrap",get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css",array(),1,'all');
    wp_enqueue_style("bootstrap");
    wp_register_style("main",get_template_directory_uri()."/style.css",array(),false,'all');
    wp_enqueue_style("main");
    
    wp_register_script("jquery",get_template_directory_uri()."/jquery/jquery.min.js",'',1,true);
    wp_enqueue_script("jquery");
    wp_register_script("bootstrap",get_template_directory_uri()."/vendor/bootstrap/js/bootstrap.bundle.min.js",'',1,true);
    wp_enqueue_script("bootstrap");
    wp_register_script("mainJs",get_template_directory_uri()."/js/script.js",'',1,true);
    wp_enqueue_script("mainJs");

    
}
add_action('wp_enqueue_scripts','add_styles_and_scripts');


function add_all_required_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',array('comment-list','comment-form','search-form'));
    add_post_type_support( 'page', 'excerpt' );
    
    add_theme_support('menus');
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu','theme'),
            'footer-menu'=> __('Footer Menu', 'theme')
        )
    );
}
add_action('after_setup_theme','add_all_required_theme_support');
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

//Image sizes
add_image_size( 'post-thumbnail size', 800, 240 );
add_image_size( 'post-thumbnail', 300, 200 );
add_image_size( 'post_size', 1000, 700 );

//Sidebar Categories 
add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="badge badge-dark badge-pill">', $links);
  $links = str_replace(')', '</span>', $links);
  return $links;
}


//CUSTOMIZER API

include(get_template_directory().'/includes/themes-customizer.php');

//function mytheme_customize_register( $wp_customize ) {
//   $wp_customize->add_setting( 'footer_copyright' , array(
//    'default'   => 'copright editable-> customizer',
//    'transport' => 'refresh',
//) );
//    
//    $wp_customize->add_section( 'deb_site_new_section_name' , array(
//    'title'      => __( 'Theme Settings', 'Deb_Site' ),
//    'priority'   => 30,
//) );
//    $wp_customize->add_control( 
//        'footer_control_id_credits', 
//        array(
//            'label'    => __( 'Change Copyright Text', 'Deb_Site' ),
//            'section'  => 'deb_site_new_section_name',
//            'settings' => 'footer_copyright',
//            'type'     => 'text',
//            
//        )
//    );   
//}




// Navigation Next post PRevious POst
function posts_link_next_class($format){
     $format = str_replace('href=', 'class="btn btn-primary" href=', $format);
    $format = str_replace('</a>', ' <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>', $format);
     return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format) {
     $format = str_replace('href=', 'class="btn btn-primary" href=', $format);
    $format = str_replace('rel="prev">', 'rel="prev"> <i class="fa fa-hand-o-left" aria-hidden="true"></i> ', $format);
     return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');
?>