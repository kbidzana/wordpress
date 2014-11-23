<?php
$functions_path = get_template_directory() . '/functions/';
require_once ($functions_path . 'elite-function.php');
/* These files build out the options interface.  Likely won't need to edit these. */
// Options panel settings and custom settings
require_once ($functions_path . 'dynamic-image.php');
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'admin-functions.php');
require_once ($functions_path . 'admin-interface.php');
require_once ($functions_path . 'theme-options.php');
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */
function elite_wp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('elite-ddsmoothmenu', get_template_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('elite-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
        wp_enqueue_script('mobile-menu', get_template_directory_uri() . "/js/mobile-menu.js", array('jquery'),'',true);
    }
    if (is_singular() and get_site_option('thread_comments')) {
        wp_print_scripts('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'elite_wp_enqueue_scripts');
//get theme option 
function elite_get_option($name) {
    $options = get_option('elite_options');
    if (isset($options[$name]))
        return $options[$name];
}
//update theme option
function elite_update_option($name, $value) {
    $options = get_option('elite_options');
    $options[$name] = $value;
    return update_option('elite_options', $options);
}
//delete theme option
function elite_delete_option($name) {
    $options = get_option('elite_options');
    unset($options[$name]);
    return update_option('elite_options', $options);
}
//Add plugin notification 
require_once(get_template_directory() . '/functions/plugin-activation.php');
require_once(get_template_directory() . '/functions/inkthemes-plugin-notify.php');
add_action('tgmpa_register', 'inkthemes_plugins_notify');