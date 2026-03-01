<?php get_header(); ?>
<?php /* Template Name: Contact */ ?>
<main>
    <section class="page-header">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <section class="contact-content">
        <div class="container">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = sanitize_text_field($_POST['name']);
                $email = sanitize_email($_POST['email']);
                $message = sanitize_textarea_field($_POST['message']);
                
                $to = get_option('admin_email');
                $subject = 'Contact Form: ' . $name;
                $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
                $headers = array('Content-Type: text/plain; charset=UTF-8');
                
                if (wp_mail($to, $subject, $body, $headers)) {
                    echo '<p class="success">Thank you! Your message has been sent.</p>';
                } else {
                    echo '<p class="error">Sorry, there was an error. Please try again.</p>';
                }
            }
            ?>
            
            <form method="post" class="contact-form">
                <label>Name</label>
                <input type="text" name="name" required>
                
                <label>Email</label>
                <input type="email" name="email" required>
                
                <label>Message</label>
                <textarea name="message" rows="5" required></textarea>
                
                <button type="submit" class="btn">Send Message</button>
            </form>
            
            <div class="contact-info">
                <h2>Get In Touch</h2>
                <p>Email: info@venture.com</p>
                <p>Phone: (555) 123-4567</p>
                <p>Address: 123 Fashion St, Style City</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
