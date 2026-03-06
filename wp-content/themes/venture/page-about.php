<?php get_header(); ?>
<?php /* Template Name: About */ ?>
<main>
    <section class="page-header page-header-pattern">
        <div class="container">
            <h1>About Venture</h1>
        </div>
    </section>

    <section class="about-content">
        <div class="container">
            <h2>Our Story</h2>
            <p>Founded in 2020, Venture has been redefining fashion with quality craftsmanship and timeless designs. We believe clothing should empower you to express your unique style. Our journey began with a simple vision: to create a fashion brand that combines elegance, comfort, and sustainability. From our humble beginnings as a small boutique, we've grown into a trusted name in the fashion industry, serving thousands of satisfied customers worldwide.</p>
            
            <p>Every piece in our collection is carefully curated and crafted with meticulous attention to detail. We work closely with skilled artisans and use only the finest materials to ensure that each garment not only looks exceptional but also stands the test of time. Our commitment to excellence extends beyond our products to every aspect of your shopping experience, from personalized styling advice to exceptional customer service.</p>
            
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value value-row">
                    <div class="value-image" style="background-image: url('<?php echo get_theme_mod('quality_image') ? esc_url(get_theme_mod('quality_image')) : 'https://via.placeholder.com/500x350/d4a574/ffffff?text=Quality'; ?>')"></div>
                    <div class="value-content">
                        <h3>Quality First</h3>
                        <p>Every piece is crafted with attention to detail</p>
                    </div>
                </div>
                <div class="value value-row value-reverse">
                    <div class="value-image" style="background-image: url('<?php echo get_theme_mod('sustainability_image') ? esc_url(get_theme_mod('sustainability_image')) : 'https://via.placeholder.com/500x350/d4a574/ffffff?text=Sustainability'; ?>')"></div>
                    <div class="value-content">
                        <h3>Sustainability</h3>
                        <p>Eco-friendly materials and ethical production</p>
                    </div>
                </div>
                <div class="value value-row">
                    <div class="value-image" style="background-image: url('<?php echo get_theme_mod('customer_image') ? esc_url(get_theme_mod('customer_image')) : 'https://via.placeholder.com/500x350/d4a574/ffffff?text=Customer'; ?>')"></div>
                    <div class="value-content">
                        <h3>Customer Focus</h3>
                        <p>Your satisfaction is our priority</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
