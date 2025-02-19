<?php get_header(); ?>
<main>
    <h1 class="error-page">
        404<br>
        Page Not Found
    </h1>
    <p>Sorry, we can't find the page you're looking for :(</p>
    <button class="custom-button">
        <a href="<?php echo home_url(); ?>">Back to Home</a>
    </button>
</main>
<?php get_footer(); ?>
