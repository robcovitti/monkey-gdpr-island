<?php

/** 
 * 
 * Plugin Name: Monkey GDPR Island
 * Plugin URI: www.robertocovitti.com/monkey-gdpr-island/
 * Description: Guida all'applicazione del Regolamento europeo in materia di protezione dei dati personali
 * Version: 1.0
 * Author: Roberto Covitti
 * Author URI: www.robertocovitti.com
 * License: GPL2 
 * 
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit; 
}

define('MONKEY_GDPR_ISLAND__PLUGIN_VERSION', '1.0.0');
define('MONKEY_GDPR_ISLAND__PLUGIN_FILE', __FILE__);
define('MONKEY_GDPR_ISLAND__PLUGIN_DIR', plugin_dir_path(__FILE__));

// function that runs when shortcode is called
function custom_shortcode() { 

    // import main class
    require_once MONKEY_GDPR_ISLAND__PLUGIN_DIR . 'map.php';
    //include( WP_PLUGIN_DIR.'/monkey-gdpr-island/index.php' );

    // Output needs to be return
    return ob_get_clean();
}
// register shortcode
add_shortcode('monkeyGDPRmap', 'custom_shortcode');