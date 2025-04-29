<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="contact-form-container">
    <h1>Contact Us</h1>
    <p>Have a question? Send us a message using the form below.</p>

    <!-- Display success message if present -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 'message_sent'): ?>
        <p style="color: green;">Your message has been sent successfully!</p>
    <?php endif; ?>

    <form id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="contact_form_submit">
        
        <label for="name">Name</label>
        <input name="name" type="text" required>
        
        <label for="email">Email</label>
        <input name="email" type="email" required>
        
        <label for="message">Message</label>
        <textarea name="message" rows="5" required></textarea>
        
        <button type="submit">Send Message</button>
    </form>

    <div id="form-status" style="display: none;"></div>
</div>

<?php get_footer(); ?>