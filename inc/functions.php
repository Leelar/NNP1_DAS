<?php

define('THEMEROOT', get_stylesheet_directory_uri()); 
define('IMAGES', THEMEROOT.'/images')

if (!isset( $content_width )) {
    $content_width = 800;
}

/* ================= Link File PHP to Functions File  ================== */

/* ການດືງເອົາ file ອື່ນເຂົ້າມາໃສ່ໃນເວັບ */
require_once "inc/wp_bootstrap_navwalker.php";
require_once "inc/include-kirki.php";
require_once "inc/mts-theme-kirki.php";
require_once "inc/customizer_mts.php";

/* ================= End Link File PHP to Functions File  ================== */


/*=================================================================*/
if ( ! function_exists( 'mts_setup' ) ) :
function mts_setup() {

    load_theme_textdomain( 'mts', get_template_directory() . '/languages' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
    
    
    /* =========== ເພີ່ມຂະໜາດຂອງຮູບເພື່ອສະແດງຜົນໃນ Thumbnail. ============ */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'news-tb', 362, 245, array( 'center', 'center' ) );
    
    
    /* ================ ເພີ່ມ menu ເຂົ້າໄປໃນເວັບໄຊທ. =================== */
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'mts' )
    ));
    
    
}
endif; // mts_setup
add_action( 'after_setup_theme', 'mts_setup' );
/*=================================================================*/



/* ================ Fucntions ການສ້າງ Widget ໃຫ້ເວັບໄຊທ =================== */
if ( ! function_exists( 'mts_widgets_init' ) ) :

function mts_widgets_init() {

    /*
     * ບ່ອນລົງທະບຽນສ້າງ Widget ສໍາລັບ Wordpress.
     */
    
    /* ເລີ່ມຕົ້ນ Copy code ບ່ອນນີ້ເພື່ອເອົາໄປສ້າງເປັນ Widget */
    register_sidebar( array(
        'name' => __( 'Slideshow', 'mts' ),
        'id' => 'slider',
        'description' => 'Aow metaslider ma sai',
        'before_widget' => '<div id="%1$s" class="%2$s slider”>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );
    /* ສິນສຸດການ copy code ບ່ອນນີ້ */

    
  
}
add_action( 'widgets_init', 'mts_widgets_init' );
endif;// mts_widgets_init

/* ================ ສີນສຸດ Fucntions ການສ້າງ Widget ໃຫ້ເວັບໄຊທ =================== */


/*=================================================================*/
if ( ! function_exists( 'mts_customize_register' ) ) :

function mts_customize_register( $wp_customize ) {

}
add_action( 'customize_register', 'mts_customize_register' );
endif;// mts_customize_register
/*=================================================================*/

/*=================================================================*/
if ( ! function_exists( 'mts_enqueue_scripts' ) ) :
    function mts_enqueue_scripts() {

   /* ================ ການເພີ່ມຫລື ຫລຸດ JS ໃນເວັບໄຊທ =================== */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'mts_dropdown_offcans' );
    wp_enqueue_script( 'mts_dropdown_offcans', get_template_directory_uri() . '/js/mts_dropdown_offcans.min.js', false, null, true);


    wp_deregister_script( 'jqueryfancybox' );
    wp_enqueue_script( 'jqueryfancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', false, null, true);

    wp_deregister_script( 'custom' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', false, null, true);

    /* =============== End add Javascript  ==================== */

    /* =============== ການເພີ່ມຫລື ຫລຸດ CSS ໃນເວັບໄຊທ ================ */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'jqueryfancybox' );
    wp_enqueue_style( 'jqueryfancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', false, null, 'all');

    wp_deregister_style( 'mts_dropdown_offcanvas' );
    wp_enqueue_style( 'mts_dropdown_offcanvas', get_template_directory_uri() . '/css/mts_dropdown_offcanvas.min.css', false, null, 'all');
        
    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* ================= End Add CSS  ================== */

    }
    add_action( 'wp_enqueue_scripts', 'mts_enqueue_scripts' );
endif;
/*=================================================================*/

/* ເຮັດໃຫ້ເວັບໄຊທ ຕັດຄໍາເວົ້າ excerpt ລົງ */
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
    

?>
