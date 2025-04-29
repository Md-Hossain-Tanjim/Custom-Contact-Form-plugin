<?php
/**
 * Plugin Name: Contact Form Plugin
 * Description: Handles contact form submissions and stores messages in the database.
 * Version: 1.0
 * Author: Your Name
 */

defined('ABSPATH') || exit;

// Include necessary files
require_once plugin_dir_path(__FILE__) . 'includes/database.php';
require_once plugin_dir_path(__FILE__) . 'includes/form-handler.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-display.php';

// Register admin menu
function contact_form_plugin_menu() {
    add_menu_page('Contact Messages', 'Contact Messages', 'manage_options', 'contact-messages', 'display_contact_messages');
}
add_action('admin_menu', 'contact_form_plugin_menu');
?>