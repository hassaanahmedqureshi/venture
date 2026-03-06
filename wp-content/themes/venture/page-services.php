<?php get_header(); ?>
<?php /* Template Name: Services */ ?>
<main>
    <section class="page-header page-header-pattern">
        <div class="container">
            <h1>Our Services</h1>
        </div>
    </section>

    <section class="services-intro">
        <div class="container">
            <h2>Elevating Your Fashion Experience</h2>
            <p>At Venture, we offer a comprehensive range of premium fashion services designed to meet all your style needs. From personalized styling consultations to expert tailoring, our dedicated team is committed to helping you look and feel your absolute best. Whether you're seeking a complete wardrobe transformation, need the perfect fit, or require specialized corporate solutions, we provide exceptional service with attention to every detail. Discover how our expertise can enhance your fashion journey.</p>
        </div>
    </section>

    <section class="services-content">
        <div class="container">
            <div class="services-grid">
                <div class="service-box" style="background-image: url('<?php echo get_theme_mod('styling_image') ? esc_url(get_theme_mod('styling_image')) : 'https://via.placeholder.com/600x400/d4a574/ffffff?text=Styling'; ?>')">
                    <div class="service-overlay">
                        <h3>Personal Styling</h3>
                        <p>Expert fashion advice to find your perfect look and style</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                
                <div class="service-box" style="background-image: url('<?php echo get_theme_mod('tailoring_image') ? esc_url(get_theme_mod('tailoring_image')) : 'https://via.placeholder.com/600x400/d4a574/ffffff?text=Tailoring'; ?>')">
                    <div class="service-overlay">
                        <h3>Custom Tailoring</h3>
                        <p>Perfect fits and custom alterations for all garments</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                
                <div class="service-box" style="background-image: url('<?php echo get_theme_mod('corporate_image') ? esc_url(get_theme_mod('corporate_image')) : 'https://via.placeholder.com/600x400/d4a574/ffffff?text=Corporate'; ?>')">
                    <div class="service-overlay">
                        <h3>Corporate Solutions</h3>
                        <p>Bulk orders and custom branding for businesses</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                
                <div class="service-box" style="background-image: url('<?php echo get_theme_mod('gift_image') ? esc_url(get_theme_mod('gift_image')) : 'https://via.placeholder.com/600x400/d4a574/ffffff?text=Gift'; ?>')">
                    <div class="service-overlay">
                        <h3>Gift Services</h3>
                        <p>Premium wrapping and personalized messages</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                
                <div class="service-box" style="background-image: url('<?php echo get_theme_mod('consultation_image') ? esc_url(get_theme_mod('consultation_image')) : 'https://via.placeholder.com/600x400/d4a574/ffffff?text=Consultation'; ?>')">
                    <div class="service-overlay">
                        <h3>Style Consultation</h3>
                        <p>One-on-one sessions with our fashion experts</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                
                <div class="service-box" style="background-image: url('<?php echo get_theme_mod('alterations_image') ? esc_url(get_theme_mod('alterations_image')) : 'https://via.placeholder.com/600x400/d4a574/ffffff?text=Alterations'; ?>')">
                    <div class="service-overlay">
                        <h3>Quick Alterations</h3>
                        <p>Fast and professional clothing alterations</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-help">
        <div class="container">
            <h2>Still Unsure About What You Want?</h2>
            <p>Let us help you find the perfect service for your needs. Fill out the form below and our team will get back to you, or give us a call for immediate assistance.</p>
            
            <div class="help-content">
                <form method="post" class="help-form">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" rows="4" placeholder="Tell us what you're looking for..." required></textarea>
                    <button type="submit" class="btn">Send Inquiry</button>
                </form>
                
                <div class="help-phone">
                    <h3>Or Call Us Directly</h3>
                    <p class="phone-number">📞 (555) 123-4567</p>
                    <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
