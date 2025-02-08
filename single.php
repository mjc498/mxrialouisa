<?php get_header(); ?>

<main class="post-container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <p class="post-meta">Published on <?php the_date(); ?> in <?php the_category(', '); ?></p>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            
            <div class="post-tags">
                <?php the_tags('Tags: ', ', '); ?>
            </div>

            <!-- CONTACT FORM -->
            <div class="contact-form-container">
                <h2>Contact Us</h2>
                <hr class="underline">

                <form id="contact-form" method="post">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Write a Comment</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit" class="submit-btn">Submit</button>
                </form>

                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = sanitize_text_field($_POST["name"]);
                    $email = sanitize_email($_POST["email"]);
                    $message = sanitize_textarea_field($_POST["message"]);

                    $to = "your-email@example.com"; // Replace with your email
                    $subject = "New Contact Form Submission";
                    $headers = "From: $email\r\nReply-To: $email";

                    $email_body = "Name: $name\n";
                    $email_body .= "Email: $email\n\n";
                    $email_body .= "Message:\n$message\n";

                    if (wp_mail($to, $subject, $email_body, $headers)) {
                        echo "<p class='success-message'>Message sent successfully!</p>";
                    } else {
                        echo "<p class='error-message'>Failed to send message.</p>";
                    }
                }
                ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
