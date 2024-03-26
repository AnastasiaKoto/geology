<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) or define( 'CHLD_THM_CFG_IGNORE_PARENT', TRUE );

// END ENQUEUE PARENT ACTION

//подключаем стили и скрипты
function all_styles() {
	wp_enqueue_style('bootstrap-grid-css', '/wp-content/themes/geolog/assets/css/bootstrap-grid.css' );
    wp_enqueue_style('bootstrap-reboot-css', '/wp-content/themes/geolog/assets/css/bootstrap-reboot.css' );
    wp_enqueue_style('fancybox-css', '/wp-content/themes/geolog/assets/css/fancybox.css' );
    //wp_enqueue_style('swiper-bundle-css', '/wp-content/themes/geolog/assets/css/swiper-bundle.min.css' );
    wp_enqueue_style('swiper-css', '/wp-content/themes/geolog/assets/css/swiper.min.css' );
    wp_enqueue_style('style-css', '/wp-content/themes/geolog/assets/css/style.css' );
    wp_enqueue_style('service-css', '/wp-content/themes/geolog/assets/css/service.css' );
    wp_enqueue_style( 'about_css', '/wp-content/themes/geolog/assets/css/about.css' );
    wp_enqueue_style( 'prices_css', '/wp-content/themes/geolog/assets/css/prices.css' );
    wp_enqueue_style( 'equipment_css', '/wp-content/themes/geolog/assets/css/equipment.css' );
    wp_enqueue_style( 'equipment_css', '/wp-content/themes/geolog/assets/css/prices.css' );
}
function all_js() {
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js');
    wp_enqueue_script('mask', 'https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('fancybox-js', '/wp-content/themes/geolog/assets/js/fancybox.umd.js', array('jquery'), '1.0', true);
    wp_enqueue_script('swiper-bundle-js', '/wp-content/themes/geolog/assets/js/swiper-bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('main-js', '/wp-content/themes/geolog/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'all_styles');
add_action('wp_enqueue_scripts', 'all_js');

//меню
add_action( 'after_setup_theme', 'theme_register_nav_header_top_menu' );

function theme_register_nav_header_top_menu() {
	register_nav_menu( 'header', 'Header Top Menu');
}

add_action( 'after_setup_theme', 'theme_register_nav_header_cats_menu' );

function theme_register_nav_header_cats_menu() {
	register_nav_menu( 'header-cats', 'Header Cats Menu');
}

//добавляем класс из верстки

function add_active_class_to_menu_item($classes, $item) {
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'header-nav_active';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_active_class_to_menu_item', 10, 2);

//добавляем обертку выпадашки

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $output .= '<ul>';
    }
  
    function end_lvl( &$output, $depth = 0, $args = array() ) {
      $output .= '</ul>';
    }
  
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      $output .= '<li><a href="' . $item->url . '">' . $item->title . '</a>';
      if (in_array('menu-item-has-children', $item->classes)) {
        $output .= '<div class="dropdown-menu dropdown-menu_header-bottom"><span class="dropdown-menu_header-bottom__title">' . $item->title . '</span>';
      }
    }
  
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
      if (in_array('menu-item-has-children', $item->classes)) {
        $output .= '</div>';
      }
      $output .= '</li>';
    }
} 

//разделитесь для крошек

function add_svg_separator( $link_output, $link ) {
  if ( !empty( $link_output ) && !empty( $link ) && !empty( $link['url'] ) && ! isset( $link['current'] ) ) {
      $svg_separator = '<span class="svg-separator">' . '<svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none"><path d="M0.5 1L3.5 4L0.5 7" stroke="#898989"/></svg>' . '</span>';
      $link_output .= $svg_separator;
  }
  return $link_output;
}
add_filter( 'wpseo_breadcrumb_single_link', 'add_svg_separator', 10, 2 );

//ЧУЖОЕ


/*remove_filter('template_redirect', 'redirect_canonical');  

$town = array();

add_action( 'init', 'init_town' );

function init_town(){
    global $town;

    $domain = get_domain(); 


    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    

    if (strpos($url, 'www.') !== false) {
      $url = str_replace("www.","",$url);
      //header("HTTP/1.1 301 Moved Permanently"); 
      //header("Location: ".$url);
      exit();
    }

    

    if($domain=="moscow") {

    //   if(strpos($url, 'moscow.geogrunt.ru') != false)
    //   {
    //     header("HTTP/1.1 301 Moved Permanently"); 
    //     header("Location: https://geogrunt.ru");
    //     exit();
    //   }
    }    

    $towns = get_posts(
        array(
            'numberposts'   => -1,
            'post_type'     => 'town',
            'meta_key'      => 'domain',
            'meta_value'    => $domain
        )
    );
    


    /*if(!$towns) {
      header("HTTP/1.1 301 Moved Permanently"); 
      header("Location: http://geologie");
      exit();
    }*/

   /* $town["title"]=$towns[0]->post_title;
    $town["id"]=$towns[0]->ID;
    $town["params"] = get_field("towndata",$towns[0]);
}

function get_domain(){
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $exploded = explode(".",$url);
    $exploded = explode("//",$exploded[0]);
    $domain =  trim($exploded[1]);
    //if($domain=="geologie")$domain="moscow";
    return $domain;
}

function get_town(){
    global $town;
    return $town["title"];
}

function get_town_id(){
    global $town;
    return $town["id"];
}

function get_town_param($opt){

    global $town;

    if($opt=="gorod"){
      return $town["title"];
    }
    
    $params = $town["params"];

    $exploded = explode(PHP_EOL,$params);
    
    for($i=0;$i<count($exploded);$i++){
        $exploded2=explode("=",$exploded[$i]);
        if(trim($exploded2[0])==$opt){
            return trim($exploded2[1]);
        }
    }
    
    return false;
}


function sh_param( $atts ) {
    return get_town_param($atts["is"]);
}
add_shortcode( 'param', 'sh_param' );


/* YOAST FIX */
/*
add_filter( 'the_title', 'do_shortcode' );
add_filter( 'wpseo_metadesc', 'filter_wpseo_metadesc' );
add_filter( 'wpseo_opengraph_title', 'do_shortcode' );
add_filter( 'wpseo_title', 'do_shortcode' );
add_filter( 'wpseo_opengraph_desc', '__return_false' );

function filter_wpseo_metadesc($desc) {
    return do_shortcode($desc);
}

function filter_wpseo_opengraph_desc($ogdesc ) {
    return do_shortcode($ogdesc );
}*/


//подключаем файлы
require __DIR__ . '/include/all_forms.php';
require __DIR__ . '/include/recomendation-form.php';