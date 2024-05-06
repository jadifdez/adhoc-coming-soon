<?php
/*
Plugin Name: ADHOC - Modo Próximamente / Modo mantenimiento
Description: Dirige a los visitantes a una página de mantenimiento.
Version: 1.0.1
Author: Agencia Adhoc
Author URI: www.agenciaadhoc.com
*/


// Registra las opciones del plugin
function adhoc_maintenance_register_settings() {
    add_option('adhoc_maintenance_mode', 'off');
    register_setting('adhoc_maintenance_options_group', 'adhoc_maintenance_mode');
}
add_action('admin_init', 'adhoc_maintenance_register_settings');

// Agrega el menú de configuración del plugin en el panel de WordPress
function adhoc_maintenance_menu_option() {
    add_menu_page('Páginas de mantenimiento', 'Modos de Mantenimiento', 'manage_options', 'adhoc-maintenance-settings', 'adhoc_maintenance_settings_page', 'dashicons-admin-tools', 6);
}
add_action('admin_menu', 'adhoc_maintenance_menu_option');

// Crea la página de configuración del plugin
function adhoc_maintenance_settings_page() {
?>
    <div class="wrap">
        <h2>Configura una Landing Page</h2>
        <form method="post" action="options.php">
            <?php settings_fields('adhoc_maintenance_options_group'); ?>
            <h3>Modo de Mantenimiento</h3>
            <p>Activa el modo correspondiente para los usuarios.</p>
            <label><input type="radio" name="adhoc_maintenance_mode" value="off" <?php if (get_option('adhoc_maintenance_mode') == 'off') echo 'checked="checked"'; ?>> Desactivado</label><br>
            <label><input type="radio" name="adhoc_maintenance_mode" value="coming_soon" <?php if (get_option('adhoc_maintenance_mode') == 'coming_soon') echo 'checked="checked"'; ?>> Modo Próximamente</label><br>
            <label><input type="radio" name="adhoc_maintenance_mode" value="maintenance" <?php if (get_option('adhoc_maintenance_mode') == 'maintenance') echo 'checked="checked"'; ?>> Modo Mantenimiento</label><br>
            <?php submit_button(); ?>
        </form>
    </div>
<?php
}

// Función para verificar si el modo de mantenimiento está activado
function adhoc_maintenance_check() {
    if (get_option('adhoc_maintenance_mode') === 'coming_soon') {
        add_action('template_redirect', 'adhoc_maintenance_load_coming_soon_template');
    } elseif (get_option('adhoc_maintenance_mode') === 'maintenance') {
        add_action('template_redirect', 'adhoc_maintenance_load_maintenance_template');
    }
}
add_action('init', 'adhoc_maintenance_check');

function adhoc_maintenance_enqueue_styles() {
    $plugin_url = plugins_url('/', __FILE__);
    wp_enqueue_style('adhoc-maintenance-style', $plugin_url . 'css/style.css');
}
add_action('wp_enqueue_scripts', 'adhoc_maintenance_enqueue_styles');


function adhoc_maintenance_load_coming_soon_template() {
    if (!current_user_can('manage_options')) {
        include(plugin_dir_path(__FILE__) . 'templates/coming-soon.php');
        exit();
    }
}

function adhoc_maintenance_load_maintenance_template() {
    if (!current_user_can('manage_options')) {
        include(plugin_dir_path(__FILE__) . 'templates/maintenance.php');
        exit();
    }
}
