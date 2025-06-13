<?php get_header(); ?>
    <div class="container">
        <div class="not-found">
            <h1>404</h1>
            <p>Oops, it looks like this page doesn't exist.</p>
            <p>You may have typed the address incorrectly or the page may have been removed.</p>
            <a href="<?php echo home_url(); ?>" class="back-home">Return to Homepage</a>
        </div>
    </div>
<?php get_footer(); ?>