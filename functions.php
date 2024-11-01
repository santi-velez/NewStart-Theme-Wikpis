<?php 

$atr_dir_path = (substr(get_template_directory(), -1) === '/') ? get_template_directory() : get_template_directory() . '/';
$atr_dir_uri  = (substr(get_template_directory_uri(), -1) === '/') ? get_template_directory_uri() : get_template_directory_uri() . '/';

define('ATR_DIR_PATH', $atr_dir_path);
define('ATR_DIR_URI', $atr_dir_uri);

require_once ATR_DIR_PATH . 'includes/class-atr-master.php';

function atr_run_master()
{
    $atr_master = new ATR_Master;
    $atr_master->run();
}

atr_run_master();

// Función para incluir scripts personalizados
function enqueue_custom_scripts() {
    // Enqueue your frontPage.js file
    wp_enqueue_script('front-page', get_template_directory_uri() . '/public/src/js/pages/frontPage.js', array(), '1.0', true);
    
    // Registrar y encolar el archivo custom.js
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/../public/js/custom.js', array('jquery'), null, true);
}

// Enganchar la función para que se ejecute en wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Función para incluir Font Awesome
function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}

// Enganchar la función para que se ejecute en wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

// Función para filtrar resultados de búsqueda sin tildes y sin considerar mayúsculas
add_filter('posts_search', 'custom_search_filter', 10, 2);
function custom_search_filter($search, $wp_query) {
    global $wpdb;

    // Verifica si hay una búsqueda
    if (empty($search) || !is_search()) {
        return $search;
    }
    

    // Obtiene el término de búsqueda
    $terms = $wp_query->query_vars['s'];
    $terms = remove_accents($terms); // Elimina tildes
    $terms = strtolower($terms); // Convierte a minúsculas

    // Divide los términos en palabras
    $terms_array = explode(' ', $terms);
    $search_terms = [];

    // Genera condiciones de búsqueda
    foreach ($terms_array as $term) {
        $search_terms[] = $wpdb->prepare("($wpdb->posts.post_title LIKE %s OR $wpdb->posts.post_content LIKE %s)", '%' . $wpdb->esc_like($term) . '%', '%' . $wpdb->esc_like($term) . '%');
    }

    // Une las condiciones con OR
    $search = ' AND (' . implode(' OR ', $search_terms) . ')';

    return $search;
}

