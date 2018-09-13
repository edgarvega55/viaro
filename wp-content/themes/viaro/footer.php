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
                        <li><a class="footer-title-item" href="services">Custom Software Development</a></li>
                        <li><a class="footer-title-item" href="web-app-development">Web App Development</a></li>
                        <li><a class="footer-title-item" href="mobile-app-development">Mobile App Development</a></li>
                        <li><a class="footer-title-item" href="desktop-application-development">Desktop Application Development</a></li>
                        <li><a class="footer-title-item" href="software-testing-qa">Software Testing & QA</a></li>
                        <li><a class="footer-title-item" href="support-maintenance">Support & Maintenance</a></li>
                        <li><a class="footer-title-item" href="dedicated-development-center">Dedicated Development Center</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-3">
                    <h4 class="footer-title-list">CONTACT US</h4>
                    <form id="contact-frm" class="contact-frm" method="POST" action="<?php bloginfo( 'url' )?>">
                        <input class="form-control" placeholder="Enter Your Name" name="name" id="contact-name"   type="text" required="true">
                        <input class="form-control" placeholder="Enter Your Email" name="email" id="contact-email" type="email" required="true">
                        <input class="form-control" placeholder="Enter Your Phone" name="phone" id="contact-phone" type="text" required="true">
                        <input type="hidden" name="" id="url-site" value="<?= bloginfo('url'); ?>" >
                        <textarea class="form-control" rows="3" placeholder="Enter Your Message" id="contact-message" name="message" required="true"></textarea>
                        <p hidden="hidden" id="notification">Your message has been sent!</p>
                        <button type="submit" class="btn btn-danger" id="btn-send">Send</button>
                    </form>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="footer-title-list">OFFICE INFORMATION</h4>
                    <ul class="list-unstyled">
                        <li class="footer-office"><a class="footer-title-item" href="mailto:info@viaro.net"><i class="fas fa-envelope"></i> info@viaro.net</a></li>
                        <li class="footer-office"><a class="footer-title-item" href="#"><i class="fas fa-headphones"></i> 1-888-962-2774</a></li>
                        <li class="footer-office"><a class="footer-title-item" href="https://www.google.com/maps/place/20+Trolley+Square,+Wilmington,+DE+19806/@39.757929,-75.56133,13z/data=!4m5!3m4!1s0x89c6fd100dc4c1d1:0x4b32df589233cc42!8m2!3d39.7579294!4d-75.5613299" target="_blank"><i class="fas fa-home"></i> 20C Trolley Square Wilmington, DE 19806</a></li>
                        <li class="footer-office"><a class="footer-title-item" href="https://www.linkedin.com/company/viaro-networks-inc-"><i class="fab fa-linkedin"></i> Linkedin</a></li>
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