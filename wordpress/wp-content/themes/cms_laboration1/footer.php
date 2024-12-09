<footer id="footer">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4>Kort om oss</h4>
                <div><?php bloginfo('description'); ?></div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Kontaktuppgifter</h4>
                <div>
                    <p>The Company<br />
                    Gatgatan 1<br />
                    123 45 Någonstans</p>
                    <p>Tel: 0123456789<br />
                    E-post: <a href="mailto:info@thecompany.com">info@thecompany.com</a></p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <h4>Social media</h4>
                <div>
                    <ul class="social">
                        <li><i class="fa fa-facebook"></i> <a href="#">Facebook</a></li>
                        <li><i class="fa fa-twitter"></i> <a href="#">Twitter</a></li>
                        <li><i class="fa fa-instagram"></i> <a href="#">Instagram</a></li>
                        <li><i class="fa fa-linkedin"></i> <a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, <?php echo date('Y'); ?></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
