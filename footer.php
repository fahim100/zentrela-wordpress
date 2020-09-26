<footer class="footer">
    <div class="container">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.svg" alt="footer-logo">
        </div>
        <div class="footer-widgets">
            <div class="footer-widget about">
                <h4>About us</h4>
                <p>Facilis aliquam maxime. Nihil voluptas cum dolorum. Velit aspernatur a amet ducimus occaecati. Quia
                    aliquam et ut explicabo laboriosam voluptatem maiores officiis voluptate. Et totam nihil quis. Porro
                    necessitatibus veniam quos.</p>
            </div>
            <div class="footer-widget importants-links">
                <h4>Pages</h4>
                <ul>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Participants</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-widget subscription">
                <h4>Subscribe</h4>
                <form action="/action_page.php">
                    <input type="email" class="email" name="email" placeholder="Your Email">
                  
                    <input class="button" type="submit" value="Submit">
                </form>
            </div>
            <div class="footer-widget contact-info">
                <h4>Looking for more?</h4>
                <p>Stephen Smith<br>
                    (416) 694-8464<br>
                    500 Kingston Rd Toronto ON M4L<br> 1V3(Toronto ,Ontario)</p>
            </div>
        </div>
    </div>
</footer>
</main>

    <!-- Non-critical -->
    <!-- <link href="css/non-critical.css" rel="stylesheet" />
    <script src="js/vendor.js"></script>
    <script src="js/script.js"></script> -->
    <?php wp_footer(); ?>
  </body>
</html>