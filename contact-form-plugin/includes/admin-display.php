<?php
function display_contact_messages() {
    global $wpdb;
    $table_name = $wpdb->prefix . "contact_messages";
    $messages = $wpdb->get_results("SELECT * FROM $table_name ORDER BY date DESC");

    echo '<div class="wrap"><h1>Contact Messages</h1>';

    if (!$messages) {
        echo '<p>No messages found.</p>';
        return;
    }

    echo '<table class="widefat"><thead><tr><th>Name</th><th>Email</th><th>Message</th><th>Date</th></tr></thead><tbody>';

    foreach ($messages as $msg) {
        echo "<tr><td>{$msg->name}</td><td>{$msg->email}</td><td>{$msg->message}</td><td>{$msg->date}</td></tr>";
    }

    echo '</tbody></table></div>';
}
?>