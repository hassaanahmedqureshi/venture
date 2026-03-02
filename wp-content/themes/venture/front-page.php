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

    <!-- Showcase Section -->
    <section class="showcase">
        <div class="container">
            <div class="showcase-grid">
                <div class="showcase-slider">
                    <div class="slider-container">
                        <div class="slide active" style="background-image: url('<?php echo get_theme_mod('showcase_1_image') ? esc_url(get_theme_mod('showcase_1_image')) : 'https://via.placeholder.com/600x700/d4a574/ffffff?text=Slide+1'; ?>')"></div>
                        <div class="slide" style="background-image: url('<?php echo get_theme_mod('showcase_2_image') ? esc_url(get_theme_mod('showcase_2_image')) : 'https://via.placeholder.com/600x700/b8915f/ffffff?text=Slide+2'; ?>')"></div>
                        <div class="slide" style="background-image: url('<?php echo get_theme_mod('showcase_3_image') ? esc_url(get_theme_mod('showcase_3_image')) : 'https://via.placeholder.com/600x700/9a7a4f/ffffff?text=Slide+3'; ?>')"></div>
                        <div class="slide" style="background-image: url('<?php echo get_theme_mod('showcase_4_image') ? esc_url(get_theme_mod('showcase_4_image')) : 'https://via.placeholder.com/600x700/7d6340/ffffff?text=Slide+4'; ?>')"></div>
                    </div>
                </div>
                <div class="showcase-content">
                    <h2>Venture is Comfort & Style</h2>
                    <p>Premium Clothing Made with Excellence</p>
                    <p>Our garments are designed to deliver an unmistakable style to your wardrobe, without compromising on fabric quality and craftsmanship. Each piece is carefully selected to ensure lasting comfort and timeless elegance.</p>
                    <p class="showcase-tagline">We believe in quality craftsmanship. Do you?</p>
                </div>
            </div>
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
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                        </svg>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature-content">
                        <h3>Free Shipping</h3>
                        <p>Enjoy complimentary shipping on all orders over $50. Fast delivery to your doorstep with tracking.</p>
                    </div>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 18.5C18.83 18.5 19.5 17.83 19.5 17C19.5 16.17 18.83 15.5 18 15.5C17.17 15.5 16.5 16.17 16.5 17C16.5 17.83 17.17 18.5 18 18.5ZM19.5 9.5L21.46 12.5H17V9.5H19.5ZM6 18.5C6.83 18.5 7.5 17.83 7.5 17C7.5 16.17 6.83 15.5 6 15.5C5.17 15.5 4.5 16.17 4.5 17C4.5 17.83 5.17 18.5 6 18.5ZM20 8H17V4H3C1.9 4 1 4.9 1 6V17H3C3 18.66 4.34 20 6 20C7.66 20 9 18.66 9 17H15C15 18.66 16.34 20 18 20C19.66 20 21 18.66 21 17H23V12L20 8Z"/>
                        </svg>
                    </div>
                </div>
                <div class="feature">
                    <div class="feature-content">
                        <h3>Easy Returns</h3>
                        <p>30-day hassle-free returns policy. Not satisfied? We'll make it right with no questions asked.</p>
                    </div>
                    <div class="feature-icon">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 6V9L16 5L12 1V4C7.58 4 4 7.58 4 12C4 13.57 4.46 15.03 5.24 16.26L6.7 14.8C6.25 13.97 6 13 6 12C6 8.69 8.69 6 12 6ZM18.76 7.74L17.3 9.2C17.74 10.04 18 11 18 12C18 15.31 15.31 18 12 18V15L8 19L12 23V20C16.42 20 20 16.42 20 12C20 10.43 19.54 8.97 18.76 7.74Z"/>
                        </svg>
                    </div>
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
