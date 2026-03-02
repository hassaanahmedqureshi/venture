<?php get_header(); ?>
<?php /* Template Name: Home */ ?>
<main>
    <!-- Hero Section -->
    <section class="hero" <?php if(get_theme_mod('hero_image')): ?>style="background-image: linear-gradient(rgba(44, 36, 22, 0.6), rgba(44, 36, 22, 0.6)), url('<?php echo esc_url(get_theme_mod('hero_image')); ?>'); background-size: cover; background-position: center;"<?php endif; ?>>
        <div class="container">
            <h1>Elevate Your Style</h1>
            <p>Discover premium clothing for every occasion</p>
            <a href="#shop" class="btn" onclick="event.preventDefault(); document.querySelector('.collections').scrollIntoView({behavior: 'smooth'});">Shop Now</a>
        </div>
    </section>

    <!-- Featured Collections -->
    <section class="collections" id="shop">
        <div class="container">
            <h2>Featured Collections</h2>
            <div class="collection-grid">
                <div class="collection-item" style="background-image: url('<?php echo get_theme_mod('men_image') ? esc_url(get_theme_mod('men_image')) : 'https://via.placeholder.com/400x300/667eea/ffffff?text=Men'; ?>')">
                    <div class="collection-overlay">
                        <h3>Men's Wear</h3>
                        <p>Classic & contemporary styles</p>
                    </div>
                </div>
                <div class="collection-item" style="background-image: url('<?php echo get_theme_mod('women_image') ? esc_url(get_theme_mod('women_image')) : 'https://via.placeholder.com/400x300/764ba2/ffffff?text=Women'; ?>')">
                    <div class="collection-overlay">
                        <h3>Women's Wear</h3>
                        <p>Elegant & trendy fashion</p>
                    </div>
                </div>
                <div class="collection-item" style="background-image: url('<?php echo get_theme_mod('kids_image') ? esc_url(get_theme_mod('kids_image')) : 'https://via.placeholder.com/400x300/f093fb/ffffff?text=Kids'; ?>')">
                    <div class="collection-overlay">
                        <h3>Kids Wear</h3>
                        <p>Fun & comfortable styles</p>
                    </div>
                </div>
                <div class="collection-item" style="background-image: url('<?php echo get_theme_mod('accessories_image') ? esc_url(get_theme_mod('accessories_image')) : 'https://via.placeholder.com/400x300/4facfe/ffffff?text=Accessories'; ?>')">
                    <div class="collection-overlay">
                        <h3>Accessories</h3>
                        <p>Complete your look</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="features">
        <div class="container">
            <h2>Why Choose Venture</h2>
            <div class="features-grid">
                <div class="feature">
                    <div class="feature-content">
                        <h3>Quality Fabrics</h3>
                        <p>Premium materials for lasting comfort. Every piece is carefully crafted with attention to detail and durability.</p>
                    </div>
                    <div class="feature-icon">✦</div>
                </div>
                <div class="feature">
                    <div class="feature-content">
                        <h3>Free Shipping</h3>
                        <p>Enjoy complimentary shipping on all orders over $50. Fast delivery to your doorstep with tracking.</p>
                    </div>
                    <div class="feature-icon">✈</div>
                </div>
                <div class="feature">
                    <div class="feature-content">
                        <h3>Easy Returns</h3>
                        <p>30-day hassle-free returns policy. Not satisfied? We'll make it right with no questions asked.</p>
                    </div>
                    <div class="feature-icon">↻</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe for exclusive offers and new arrivals</p>
            <form>
                <input type="email" placeholder="Enter your email" required>
                <button type="submit" class="btn">Subscribe</button>
            </form>
        </div>
    </section>
</main>

<?php get_footer(); ?>
