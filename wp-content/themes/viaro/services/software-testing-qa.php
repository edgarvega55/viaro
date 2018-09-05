<?php
    /* Template Name: Software Testing & QA Tempalte */
    get_header();
?>

<!-- #region title -->
<div id="main-pages" class="col-12">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1> <?= get_the_title() ?> </h1>
            </div>
        </div>
    </div>
</div>
<!-- #endregion title -->

<!-- #region breadcrumb -->
<div class="col-12 container-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb nav-breadcrumb">
                        <li class="breadcrumb-item"><a href="http://localhost/viaro/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= get_the_title() ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- #endregion breadcrumb -->

<div class="bar-bg"></div>
<div class="circle-bg"></div>

<!-- #region Quality  -->
<div class="col-md-12 delivering">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="dedicated-title">Quality   <span class="text-orange">Matters </span></h2>
                <p class="dedicated-text">Our stand-alone and integrated testing services deliver trustworthy quality assurance through a deep understanding of your business goals and applications, whether you are a start-up or a larger corporation.</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Quality -->

<div class="bar-bg"></div>

<!-- #region Enterprise   -->
<div class="col-md-12 content-gray-service qa-services ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-3 col-12 col-md-6 col-sm-12 order-md-first">
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/cycle.png" alt="qa" class="icon">Full-Cycle QA</h4>
                        <p>Beginning with the requirement analysis and staying with you throughout the development, implementation, and maintenance of systems and apps.</p>
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/testauto.png" alt="qa" class="icon">Test Automation</h4>
                        <p>We'll put together custom test development with automation solutions to create the best and most complete test-suite for your technologies.</p>
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/functional.png" alt="qa" class="icon">Functional</h4>
                        <ul class="bullets">
                            <li>Ad-hoc Testing</li>
                            <li>Automated Testing</li>
                            <li>Cross Browser Testing</li>
                            <li>Data Migration Testing</li>
                            <li>End-to-End Testing</li>
                            <li>Exploratory Testing</li>
                            <li>Functional Testing</li>
                            <li>Manual Testing</li>
                            <li>Product Testing</li>
                            <li>System Integration Testing</li>
                            <li>Unit Testing</li>
                            <li>User Acceptance Testing</li>
                        </ul>
                    </div>
                    <div class="qa-services-diagram col-xl-6 col-md-12 order-md-last order-sm-last order-last">
                        <h2>Our Full Set of QA Services</h2>
                        <br>
                        <img  class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/website-diagram.png" alt="website diagram" class="img-responsive">                        
                    </div>
                    <div class="col-xl-3 col-12 col-md-6 col-sm-12 order-xl-last">
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/swtesting.png" alt="qa" class="icon">Full-Cycle QA</h4>
                        <p>We can build a full set of tests for your Web, desktop, and mobile applications, ensuring that all of them are running at optimum quality.</p>
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/access.png" alt="qa" class="icon">Accessibility Testing</h4>
                        <p>Section 508, WCAG, and others, rest assured that you are fully compliant.</p>
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/nonfunctional.png" alt="qa" class="icon">Non Functional</h4>
                        <ul class="bullets">
                            <li>Compatibility</li>
                            <li>Installation</li>
                            <li>Performance</li>
                            <li>Security</li>
                            <li>Usability</li>
                        </ul>
                        <h4><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/documentation.png" alt="qa" class="icon">Documentation</h4>
                        <p>Clearly designed documents no matter your target audiences.</p>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<!-- #endregion Enterprise  -->

<!-- #region Mobile Development -->
<div class="col-md-12 content-white-service service-development">
    <div class="container">
        <div class="row service-content-big">
            <div class="col-12">
                <ul class="list-inline">
                    <li class="list-inline-item"><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/hp.png" alt="hp"></li>
                    <li class="list-inline-item"><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/selenium.png" alt="selenium"></li>
                    <li class="list-inline-item"><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/nunit.jpg" alt="nunit"></li>
                    <li class="list-inline-item"><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/junit.png" alt="junit"></li>
                    <li class="list-inline-item"><img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/tfs.jpg" alt="tfs"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Mobile Development-->

<!-- #region comments -->
<div class="col-12 content-gray comments-services text-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselCommentsServices" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators comments-service-indicators">
                        <li data-target="#carouselCommentsServices" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCommentsServices" data-slide-to="1"></li>
                        <li data-target="#carouselCommentsServices" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-comments-service">
                            <div class="row">
                                <div class="col-12">
                                    <p>"I appreciate all the years that we have worked together. You and your team have been an important, professional resource for us."</p>
                                    <h4>Robert Dennis, UCLA Computer Technologies Research Lab<h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments-service">
                            <div class="row">
                                <div class="col-12">
                                    <p>"Working with Viaro has been great. Thanks very much for all your team’s hard work and professionalism. It has been a pleasure to work with you all. You all have been very valuable to our success here in Canada."</p>
                                    <h4>Rick Delorme, CTO - Canadian Health System Inc. (CHS)<h4>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments-service">
                            <div class="row">
                                <div class="col-12">
                                    <p>"Great work, on time and high quality."</p>                                    
                                    <h4>Al EssaFormer MIT Sloan CIO<h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion commentst -->

<?php 
    get_footer(); 
?>