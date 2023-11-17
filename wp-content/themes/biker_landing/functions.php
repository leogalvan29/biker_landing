<?php
/**
 * biker-landing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package biker_landing
 */

if ( ! defined( 'biker_landing_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'biker_landing_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function biker_landing_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on biker_landing, use a find and replace
		* to change 'biker_landing' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'biker_landing', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'biker-landing' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'biker_landing_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'biker_landing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function biker_landing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'biker_landing_content_width', 640 );
}
add_action( 'after_setup_theme', 'biker_landing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function biker_landing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'biker-landing' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'biker-landing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'biker_landing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function biker_landing_scripts() {
	wp_enqueue_style( 'biker_landing-style', get_stylesheet_uri(), array(), biker_landing_VERSION );
	wp_style_add_data( 'biker_landing-style', 'rtl', 'replace' );

	wp_enqueue_script( 'biker_landing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), biker_landing_VERSION, true );

	wp_enqueue_script('biker_landing-main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , biker_landing_VERSION, true); 
	wp_enqueue_script('my-ajax-script', get_stylesheet_directory_uri() . '/js/formulario.js', array('jquery'));
    wp_localize_script('my-ajax-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'biker_landing_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


function biker_landing_customizer($wp_customize) {
    // Sección para el logo
    $wp_customize->add_section('logo_section', array(
        'title'    => __('Configuración del Logo', 'biker-landing'),
        'priority' => 30,
    ));

    // Control para el logo
    $wp_customize->add_setting('logo_setting', array(
        'default'   => '',
        'transport' => 'refresh',
		'sanitize_callback' => 'custom_sanitize_logo_setting'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_control', array(
        'label'    => __('Subir Logo', 'biker-landing'),
        'section'  => 'logo_section',
        'settings' => 'logo_setting',
    )));

	// Control para el tamaño del logo
    $wp_customize->add_setting('logo_size_header', array(
        'default'   => '100px', // Puedes cambiar el valor por defecto según tus necesidades
        'transport' => 'refresh',
		'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control('logo_size_control', array(
        'label'    => __('Tamaño del Logo', 'biker-landing'),
        'section'  => 'logo_section',
        'settings' => 'logo_size_header',
        'type'     => 'text',
    ));

    // Sección para el botón
    $wp_customize->add_section('button_section', array(
        'title'    => __('Configuración del Botón', 'biker-landing'),
        'priority' => 30,
    ));

    // Control para el botón
    $wp_customize->add_setting('button_text_header', array(
        'default'   => 'Leer más',
        'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('button_text_header', array(
        'label'    => __('Texto del Botón', 'biker-landing'),
        'section'  => 'button_section',
        'settings' => 'button_text_header',
        'type'     => 'text',
    )); 
	// Control para la URL del botón
    $wp_customize->add_setting('button_url_header', array(
        'default'   => '',
        'transport' => 'refresh',
		'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('button_url_header', array(
        'label'    => __('URL del Botón', 'biker-landing'),
        'section'  => 'button_section',
        'settings' => 'button_url_header',
        'type'     => 'url',
    ));

	// Control para el color de fondo del botón
    $wp_customize->add_setting('button_bg_color_header', array(
        'default'   => '#3498db', // Puedes cambiar el valor por defecto según tus necesidades
        'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_bg_color_control', array(
        'label'    => __('Color de Fondo del Botón', 'biker-landing'),
        'section'  => 'button_section',
        'settings' => 'button_bg_color_header',
    )));

    // Control para el color del texto del botón
    $wp_customize->add_setting('button_text_color_header', array(
        'default'   => '#ffffff', // Puedes cambiar el valor por defecto según tus necesidades
        'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_text_color_control', array(
        'label'    => __('Color del Texto del Botón', 'biker-landing'),
        'section'  => 'button_section',
        'settings' => 'button_text_color_header',
    ))); 

	// Nuevo control para el ancho del botón
    $wp_customize->add_setting('button_width_header', array(
        'default'   => '150px',
        'transport' => 'refresh',
		'sanitize_callback' => 'absint'
    ));

	//seccion footer opciones

    $wp_customize->add_section('opciones_footer', array(
        'title' => __('Opciones de Footer', 'biker-landing'), // Nombre de la sección (reemplaza 'tu-text-domain' con tu text-domain)
        'priority' => 30, // Prioridad de visualización en el Personalizador
    ));

    // Control de Color
    $wp_customize->add_setting('color_footer', array(
        'default' => '#ff0000', // Valor por defecto del color
        'sanitize_callback' => 'sanitize_hex_color', // Función para sanitizar el valor del color
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color_primario_control', array(
        'label' => __('Color background footer', 'biker-landing'), // Etiqueta del control (reemplaza 'tu-text-domain' con tu text-domain)
        'section' => 'opciones_footer', // Sección a la que pertenece el control
        'settings' => 'color_footer', // Configuración asociada al control
    )));

	$wp_customize->add_setting('texto_footer', array(
        'default'   => 'Titulo del footer',
        'transport' => 'refresh',
		'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('texto_footer', array(
        'label'    => __('Texto del titulo footer', 'biker-landing'),
        'section'  => 'opciones_footer',
        'settings' => 'texto_footer',
        'type'     => 'text',
    )); 

	 
}

add_action('customize_register', 'biker_landing_customizer');


// funciones para agregar pagina a escritorio donde vamos a mostrar los clientes registrados
function crearTablaLeads(){

	global $wpdb;
	$tabla_registros = $wpdb->prefix . 'leads';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $tabla_registros
	  (
		 id INT NOT NULL AUTO_INCREMENT,
		 nombre VARCHAR(255) NOT NULL,
		 email VARCHAR(255) NOT NULL,
		 telefono VARCHAR(15) NOT NULL,
		 
		 PRIMARY KEY (id)
	  ) $charset_collate;
	  
	"; 

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );

}

register_activation_hook( __FILE__, 'crearTablaLeads' );



// funcion para procesar formulario
function procesarFormulario(){
	check_ajax_referer('procesar_formulario_nonce', 'nonce');
	  // Recuperar los datos del formulario
	  $nombre = sanitize_text_field($_POST['nombre']);
	  $email = sanitize_email($_POST['email']); 
	  $telefono = sanitize_text_field($_POST['telefono']);

	  //objeto con los datos para insertar 

	  $datos = array(
		'nombre' => $nombre,
		'email' => $email,
		'telefono' => $telefono
	  );
	  $formatos = array(
		'%s', // formato para 'nombre'
		'%s', // formato para 'email'
		'%s'  // formato para 'telefono'
	);
 
	  // crear tabla en la base de datos
	   global $wpdb; 
	   $tabla_registros = $wpdb->prefix . 'leads'; 
	   $wpdb->insert($tabla_registros, $datos , $formatos);
	  
	   
       
    wp_die();
}

add_action('wp_ajax_procesar_formulario_ajax', 'procesarFormulario');
add_action('wp_ajax_nopriv_procesar_formulario_ajax', 'procesarFormulario');

function agregarClientesPagina(){
	add_menu_page(
        'Página de Administración', // Título 
        'Clientes Registrados', // Título de la página
        'manage_options', // Capacidad requerida para ver esta página
        'pagina-administracion', // Slug de la página
        'mostrarTablaLeads' // Función que muestra el contenido
    );
}

add_action('admin_menu','agregarClientesPagina');  




function mostrarTablaLeads(){
        global $wpdb;
		$tabla_registros = $wpdb->prefix . 'leads';

		// obtener resultados 
		$resultados = $wpdb->get_results("SELECT * FROM $tabla_registros");
		// Mostrar los datos en una tabla HTML
		echo '<div class="wrap"><h2>Datos de Leads</h2>';
		echo '<table class="wp-list-table widefat fixed striped">';
		echo '<thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th></tr></thead>';
		echo '<tbody>';
		foreach ($resultados as $registro) {
			echo "<tr><td>{$registro->id}</td><td>{$registro->nombre}</td><td>{$registro->email}</td><td>{$registro->telefono}</td></tr>";
		}
		echo '</tbody></table></div>';

}


