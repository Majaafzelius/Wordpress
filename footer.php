</main>
<footer>
    <div id="foot_container">
    <div class="third-widget-area">
            <?php dynamic_sidebar( 'third-widget-area' ); ?>
        </div>
        <div>
        <?php the_custom_logo(); // logo
        ?>
        </div>
        <div class="second-widget-area">
            <?php dynamic_sidebar( 'second-widget-area' ); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>