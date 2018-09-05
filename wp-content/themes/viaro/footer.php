<?php 
/* Main Footer File */
?>

 <!-- #region Footer-->
    <div id="footer-arrow">
        <img src="<?php bloginfo('template_url'); ?>/assets/images/footerarrow.jpg" alt="footer-arrow" class="footer-center-image">
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-title-list">COMPANY</h4>
                    <ul class="list-unstyled">
                        <li><a class="footer-title-item" href="about">About Us</a></li>
                        <li><a class="footer-title-item" href="portfolio">Portfolio</a></li>
                        <li><a class="footer-title-item" href="contact">Contact</a></li>
                    </ul>
                    <h4 class="footer-title-list">TECHNOLOGIES</h4>
                    <ul class="list-unstyled">
                        <li><a class="footer-title-item" href="net">.Net</a></li>
                        <li><a class="footer-title-item" href="mobile">Mobile</a></li>
                        <li><a class="footer-title-item" href="front-end">Front-End</a></li>
                        <li><a class="footer-title-item" href="django">Django</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-title-list">SERVICES</h4>
                    <ul class="list-unstyled">
                        <li><a class="footer-title-item" href="about">Custom Software Development</a></li>
                        <li><a class="footer-title-item" href="portfolio">Web App Development</a></li>
                        <li><a class="footer-title-item" href="contact">Mobile App Development</a></li>
                        <li><a class="footer-title-item" href="contact">Desktop Application Development</a></li>
                        <li><a class="footer-title-item" href="contact">Software Testing & QA</a></li>
                        <li><a class="footer-title-item" href="contact">Support & Maintenance</a></li>
                        <li><a class="footer-title-item" href="contact">Dedicated Development Center</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h4 class="footer-title-list">CONTACT US</h4>
                    <form class="contact-frm" action="/sent-email">
                        <input name="url_from" value="http://viaro.net/" type="hidden">
                        <input class="form-control" placeholder="Enter Your Name" name="name" type="text">
                        <input class="form-control" placeholder="Enter Your Email" name="email" type="email">
                        <input class="form-control" placeholder="Enter Your Phone" name="phone" type="text">
                        <textarea class="form-control" rows="3" placeholder="Enter Your Message" id="message" name="message"></textarea>
                        <p hidden="hidden" id="notification">Your message has been sent!</p>
                        <button type="submit" class="btn btn-danger" id="btn-send">Send</button>
                    </form>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-title-list">OFFICE INFORMATION</h4>
                    <ul class="list-unstyled">
                        <li class="footer-office"><a class="footer-title-item" href="about"><i class="fas fa-envelope"></i> info@viaro.net</a></li>
                        <li class="footer-office"><a class="footer-title-item" href="portfolio"><i class="fas fa-headphones"></i> 1-888-962-2774</a></li>
                        <li class="footer-office"><a class="footer-title-item" href="contact"><i class="fas fa-home"></i> 20C Trolley Square Wilmington, DE 19806</a></li>
                        <li class="footer-office"><a class="footer-title-item" href="contact"><i class="fab fa-linkedin"></i> Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid" id="copyright">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        © 2018 Viaro Networks Inc. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #endregion Footer-->
    <?php wp_footer(); ?>
</body>
</html>