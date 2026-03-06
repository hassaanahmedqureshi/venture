<footer>
    <div class="container">
        <div class="footer-row-1">
            <div class="footer-col">
                <h4>Address</h4>
                <p>123 Fashion Street<br>Style City, SC 12345<br>United States</p>
            </div>
            <div class="footer-col">
                <h4>Quick Links</h4>
                <nav>
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <a href="<?php echo home_url('/about'); ?>">About</a>
                    <a href="<?php echo home_url('/services'); ?>">Services</a>
                    <a href="<?php echo home_url('/contact'); ?>">Contact</a>
                </nav>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p>Subscribe for updates</p>
                <a href="#newsletter" class="btn-footer" onclick="event.preventDefault(); document.querySelector('.newsletter').scrollIntoView({behavior: 'smooth'});">Subscribe</a>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <p>Email: info@venture.com<br>Phone: (555) 123-4567<br>Hours: Mon-Fri 9AM-6PM</p>
            </div>
        </div>
        <div class="footer-row-2">
            <p>Copyright <?php echo date('Y'); ?> © Venture Fashion | 123 Fashion Street, Style City | <a href="#">Privacy Policy</a><br>
Business ID: 123456789 | Capital: $50,000 | REG SC 123456</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
