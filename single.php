<?php get_header(); ?>
<main class="content-wrapper">
    <section class="left-column">
        <h1><?php the_title(); ?></h1>
        <hr class="underline">

        <!-- HEADINGS -->
        <article>
            <h1>Heading 1</h1>
            <h2>Heading 2</h2>
            <h3>Heading 3</h3>
            <h4>Heading 4</h4>
            <h5>Heading 5</h5>
            <h6>Heading 6</h6>
        </article>

        <!-- CAROUSEL -->
        <div class="carousel-container">
            <button id="prev" class="carousel-btn left"></button>
            <div class="carousel">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/image1.jpg" class="carousel-image active">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/image2.jpg" class="carousel-image">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/image3.jpg" class="carousel-image">
            </div>
            <button id="next" class="carousel-btn right"></button>
        </div>        

        <div class="subheader-container">
            <h3><?php echo get_the_date(); ?> | <?php the_title(); ?></h3>
            <?php the_content(); ?>
            
            <!-- PULL QUOTE -->
            <div class="pull-quote-wrapper">
                <blockquote class="pull-quote">
                    <?php the_excerpt(); ?>
                </blockquote>
            </div>

            <!-- UNORDERED LIST -->
            <h3>Unordered List Example</h3>
            <ul>
                <li>WordPress Development</li>
                <li>UI/UX Design</li>
                <li>Content Management</li>
            </ul>

            <!-- ORDERED LIST -->
            <h3>Ordered List Example</h3>
            <ol>
                <li>One</li>
                <li>Two</li>
                <li>Three</li>
            </ol>

            <!-- TABLE -->
            <h3>Table</h3>
            <table border="1">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Feature Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>SEO Optimization</td>
                        <td>SEO Optimization Description</td>
                    </tr>
                    <tr>
                        <td>Responsive Design</td>
                        <td>Responsive Design Description</td>
                    </tr>
                </tbody>
            </table>

            <!-- IMAGE WITH CAPTION -->
            <h3>Image with Caption</h3>
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-github.png" alt="Example Image">
                <figcaption>caption</figcaption>
            </figure>

            <!-- VIDEO EMBED -->
            <h3>Video Embed</h3>
            <div class="video-container">
                <?php
                echo wp_oembed_get('https://youtu.be/b65MoVwANq4?si=AClarKDF8HPq4aC8');
                ?>
            </div>

            <!-- LINKS -->
            <h3>Links</h3>
            <p>Click here <a href="https://wordpress.org" target="_blank">WordPress.org</a> for more.</p>
        </div>

        <!-- FORM -->
        <hr class="underline">
        <h3>Have any questions?</h3>
        <form id="contact-form" class="contact-form">
            <input type="text" placeholder="Type your name here..." id="name" name="name" required>
            <input type="email" placeholder="Type your email here..." id="email" name="email" required>
            <textarea id="message" placeholder="Type your comment here..." name="message" rows="5" required></textarea>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </section>

    <!-- SIDEBAR -->
    <aside class="right-column">
        <?php get_sidebar(); ?>
    </aside>
</main>
<?php get_footer(); ?>
