<?php

/**
* Styling configuration for the Kirki Customizer
*/
function kirki_demo_configuration_sample_styling( $config ) {

   $config['logo_image']   =  get_template_directory_uri().'/images/mts-logo-small.svg';
   $config['description']  = __( 'MTS THEME', 'kirki' );
   $config['color_accent'] = '#00bcd4';
   $config['color_back']   = '#D4ECFF';
   $config['width']        = '20%';
   return $config;

}
add_filter( 'kirki/config', 'kirki_demo_configuration_sample_styling' );

/* ============= ການ ຈັດການ Customize ສ່ວນຫົວ Header ================== */

Mtstheme_Kirki::add_panel( 'header_panel', array(
    'priority'    => 10,
    'title'       => __( 'Manage Header', 'mts' ),
    'description' => __( 'Manage Header Areas of Themes', 'mts' ),
));
Mtstheme_Kirki::add_section( 'logo_header', array(
      'title'          => __( 'Site Logo', 'mts' ),
      'description'    => __( 'Add Website Logo', 'mts' ),
      'panel'          => 'header_panel',
      'priority'       => 10,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '', 
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'        => 'image',
	'settings'    => 'logo_image',
	'label'       => __( 'Upload Logo Images', 'mts' ),
	'description' => __( 'Upload your site Logo Images Here', 'mts' ),
	'help'        => __( 'This is some extra help text.', 'mts' ),
	'section'     => 'logo_header',
	'default'     => '',
	'priority'    => 10,
));



/* ============= Front Page ================== */
// Add Panel below
Mtstheme_Kirki::add_panel( 'frontpage_panel', array(
    'priority'    => 10,
    'title'       => __( 'Manage FrontPage', 'mts' ),
    'description' => __( 'Manage First Page of Website', 'mts' ),
));

// Add Section 
Mtstheme_Kirki::add_section( 'general_frontpage', array(
  'title'          => __( 'General Setting', 'mts' ),
  'description'    => __( 'Front Page General Settings', 'mts' ),
  'panel'          => 'frontpage_panel', // Not typically needed.
  'priority'       => 160,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '', // Rarely needed.
));

// Add Field
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'welcome_tt',
	'label'    => __( 'Welcome Title', 'mts' ),
	'section'  => 'general_frontpage',
	'default'  => esc_attr__( 'Welcome to MTS Website', 'mts' ),
	'priority' => 10,
) );







/* ============= Social Media ================== */
Mtstheme_Kirki::add_section( 'social_sec', array(
  'title'          => __( 'Social Media' ),
  'description'    => __( 'Manage Your Social media' ),
  'panel'          => '', // Not typically needed.
  'priority'       => 160,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '', // Rarely needed.
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'show_social_on_top',
	'label'       => __( 'Show On Header', 'mts' ),
	'section'     => 'social_sec',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Show', 'mts' ),
		'off' => esc_attr__( 'Hide', 'mts' ),
	),
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'        => 'switch',
	'settings'    => 'show_social_on_bottom',
	'label'       => __( 'Show On Bottom Page', 'mts' ),
	'section'     => 'social_sec',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Show', 'mts' ),
		'off' => esc_attr__( 'Hide', 'mts' ),
	),
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 's_facebook',
	'label'    => __( 'Link to Facebook', 'mts' ),
	'section'  => 'social_sec',
	'default'  => esc_attr__( '', 'mts' ),
	'priority' => 10,
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 's_twitter',
	'label'    => __( 'Link to Twitter', 'mts' ),
	'section'  => 'social_sec',
	'default'  => esc_attr__( '', 'mts' ),
	'priority' => 10,
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 's_gplus',
	'label'    => __( 'Link to Google Plus', 'mts' ),
	'section'  => 'social_sec',
	'default'  => esc_attr__( '', 'mts' ),
	'priority' => 10,
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 's_youtube',
	'label'    => __( 'Link to Youtube', 'mts' ),
	'section'  => 'social_sec',
	'default'  => esc_attr__( '', 'mts' ),
	'priority' => 10,
) );
Mtstheme_Kirki::add_field( '', array(
	'type'     => 'text',
	'settings' => 's_linkedin',
	'label'    => __( 'Link to Linkedin', 'mts' ),
	'section'  => 'social_sec',
	'default'  => esc_attr__( '', 'mts' ),
	'priority' => 10,
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 's_ig',
	'label'    => __( 'Link to Instagram', 'mts' ),
	'section'  => 'social_sec',
	'default'  => esc_attr__( '', 'mts' ),
	'priority' => 10,
));

/* ============= Footer ================== */
Mtstheme_Kirki::add_panel( 'footer_panel', array(
    'priority'    => 300,
    'title'       => __( 'Manage Footer', 'mts' ),
    'description' => __( 'Manage Footer Areas of Themes', 'mts' ),
) );
// BOX 1
Mtstheme_Kirki::add_section( 'footer_box1', array(
  'title'          => __( 'Footer Box 1' ),
  'description'    => __( 'Manage Footer box' ),
  'panel'          => 'footer_panel', // Not typically needed.
  'priority'       => 160,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '', // Rarely needed.
) );
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_tt_box1',
	'label'    => __( 'Heading Title Footer Box 1', 'mts' ),
	'section'  => 'footer_box1',
	'default'  => esc_attr__( 'Get Newsletter', 'mts' ),
	'priority' => 10,
) );







/* ============= Remove Additional CSS and Re-add Kirki CSS ================== */
add_action( 'customize_register', 'prefix_remove_css_section', 15 );
/**
 * Remove the additional CSS section, introduced in 4.7, from the Customizer.
 * @param $wp_customize WP_Customize_Manager
 */
function prefix_remove_css_section( $wp_customize ) {
	$wp_customize->remove_section( 'custom_css' );
}

Mtstheme_Kirki::add_section( 'mts_custom_css', array(
  'title'          => __( 'Additional CSS' ),
  'description'    => __( 'Add your own CSS code' ),
  'panel'          => '', // Not typically needed.
  'priority'       => 160,
  'capability'     => 'edit_theme_options',
  'theme_supports' => '', // Rarely needed.
));
Mtstheme_Kirki::add_field( 'my_config', array(
	'type'        => 'code',
	'settings'    => 'custom_css',
	'label'       => __( 'Addtional CSS', 'mts' ),
	'section'     => 'mts_custom_css',
	'default'     => '',
	'priority'    => 10,
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
	),
));

/* ============= Hook CSS from Customizer to Theme ================== */

function mts_hook_css() {
?>
        <style>




        <?php
                if( Mtstheme_Kirki::get_option('custom_css' ) ) {
                $custom_css = Mtstheme_Kirki::get_option('custom_css');
                echo $custom_css;
            }?>
        </style>
<?php
}
add_action('wp_head', 'mts_hook_css');


?>
