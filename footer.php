<?php
// FOOTER
?>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/small-transparent.png" alt="Footer Logo" class="footer-logo">
                <p class="footer-copyright">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
                </p>
            </div>

            <nav class="footer-nav">
                <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <a href="<?php echo esc_url(home_url('/about')); ?>">About Me</a>
                <a href="<?php echo esc_url(home_url('/work')); ?>">My Work</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a>
            </nav>

            <div class="footer-icons">
                <div class="icon-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-linkedin.png" alt="LinkedIn">
                </div>
                <div class="icon-circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-github.png" alt="GitHub">
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

