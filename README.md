# Contact Form Plugin

##  Overview
The **Contact Form Plugin** is a custom WordPress plugin designed to capture **contact form submissions**, store them in a **database**, and display them in the **WordPress admin panel**.

###  **Custom WordPress Theme Integration**
While this plugin functions independently, it is designed to integrate seamlessly with a **custom WordPress theme** that enhances layout and styling. If you're using the custom theme from **Task 1**, it ensures the contact form appears professionally styled within the website's design.

---

##  Features
- **User-friendly form** for collecting name, email, and messages.
- **Database storage** to retain submitted messages.
- **Admin panel interface** for viewing contact form submissions.
- **Success message display** on the contact page after submission.
- **Compatibility with custom WordPress theme** _(Optional)_.

---

##  Installation & Setup
###  **Installing the Plugin**
1. **Upload the Plugin**  
   - Place the `contact-form-plugin/` folder inside `wp-content/plugins/`.
2. **Activate the Plugin**  
   - Go to `WordPress Admin > Plugins > Installed Plugins`.
   - Find `"Contact Form Plugin"` and click `"Activate"`.
3. **Verify Database Table**  
   - Open **phpMyAdmin** and check the WordPress database.
   - Look for the table **`wp_contact_messages`** _(or the prefix-based variant)_.

###  **Using with a Custom Theme (Optional)**
1. **Upload the Theme** _(if using the custom theme)_  
   - Place the `custom-theme/` folder inside `wp-content/themes/`.
2. **Activate the Theme** _(Optional)_  
   - Go to `WordPress Admin > Appearance > Themes`.
   - Select **"Custom Theme"** and click `"Activate"`.
3. **Verify Theme Styling**  
   - Ensure the contact page elements match the design of the custom theme.

---

##  How to Use
###  **Submitting a Contact Message**
1. Navigate to the **Contact Page** (`http://your-site/contact-page/`).
2. Fill out the form (**Name, Email, Message**).
3. Click **"Send Message"**—you’ll see a **success confirmation** directly on the page.

###  **Viewing Messages in Admin Panel**
1. Log in to WordPress Admin:  
    **URL:** `http://your-site/wp-admin/`  
    **Username:** `admin`  
    **Password:** `123`  
2. Click `"Contact Messages"` in the sidebar.
3. View submitted messages inside the table.

