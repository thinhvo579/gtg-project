
<?php get_header(); ?>
    <main class="error internal-page">
        <div class="wrap-page">
            <div class="container">
                <div class="page-notice">
                    <div class="notice-title title-thankyou">
                        <h3>404 NOT FOUND</h3>
                        <P>Page you are looking is not found</P>
                    </div>
                    <div class="notice-content">
                        <p>
                        The page you are looking for does not exist. It may have been moved, or removed altogether. Perhaps you can return back to the site's homepage and see if you can find what you are looking for.
                        </p>
                        <a href="<?php echo home_url(); ?>">Back to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php get_footer(); ?>