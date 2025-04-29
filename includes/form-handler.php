<?php
add_action('admin_post_contact_form_submit', 'handle_contact_form');
add_action('admin_post_nopriv_contact_form_submit', 'handle_contact_form');

function handle_contact_form() {
    global $wpdb;
    $table_name = $wpdb->prefix . "contact_messages";

    // Validate and sanitize the fields
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    if ( empty($name) || empty($email) || empty($message) ) {
        wp_redirect(home_url('/contact-page/?error=missing_fields'));
        exit;
    }

    // Insert the message into the database
    $inserted = $wpdb->insert($table_name, [
        'name'    => $name,
        'email'   => $email,
        'message' => $message
    ]);

    if ($inserted) {
        wp_redirect(home_url('/contact-page/?success=message_sent'));
    } else {
        wp_redirect(home_url('/contact-page/?error=db_error'));
    }
    exit;
}
?>