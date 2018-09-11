<?php 
    /* Template Name: Django Template */
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

<!-- #region description -->
<div class="col-md-12 delivering">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="dedicated-title">Django is a high-level Python Web framework that encourages fast development and clean, pragmatic design which follows the model-view-template (MVT) architectural pattern. Django <span class="text-orange">Django allows quick creation of high-performing web applications.</span></h2>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion descriptiont -->

<div class="bar-bg"></div>

<!-- #region Features -->
<div class="col-12 content-gray-technologie">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-1">
                                <img class="image-icon" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/icons/custom.png" alt="custom">
                            </div>
                            <div class="col-11">
                                <h4>Custom Application Development</h4>
                                <p>Viaro's .NET engineers are widely experienced in Web, desktop, and mobile application development. Our team provides full-cycle services, including requirements gathering, analysis, support, and maintenance. Together, these processes follow standard .NET development practices for your custom product.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-1">
                                <img class="image-icon" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/icons/stest.png" alt="stest">
                            </div>
                            <div class="col-11">
                                <h4>Use Django with multiple databases</h4>
                                <ul class="bullets">
                                    <li>Postgres</li>
                                    <li>MySql</li>
                                    <li>Mongo</li>
                                    <li>Cassandra</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-1">
                                <img class="image-icon" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/icons/customapp.png" alt="customapp">
                            </div>
                            <div class="col-11">
                                <h4>Use Django as Backend for your Front-end Apps or Mobile Apps</h4>
                                <p>Whether you’re using Django as a backend for your AngularJS or JQuery Web App, or you want to use Django as backend for your native mobile Apps for iOS and Android, Viaro’s engineers can build the RESTful backend your Apps needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-1">
                                <img class="image-icon" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/icons/integration.png" alt="integration">
                            </div>
                            <div class="col-11">
                                <h4>Unit Testing with Django</h4>
                                <p>The comprehensive unit and view testing frameworks provided by Django will help your Apps to gain higher quality assurance level through its development and releases. Viaro’s engineers are used to build unit tests and view tests to cover 90% or more of the App built.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Features -->

<!-- #region Database images -->
<div class="col-md-12 content-white-technologie text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Django with multiple databases</h2>
                <br>
                <ul class="list-inline images-database">
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/postgres.gif" alt="postgres"></li>
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/mysql.png" alt="mysql"></li>
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/mongo-logo.png" alt="mongo-logo"></li>
                    <li class="list-inline-item"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/cassandra.png" alt="cassandra"></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Database images -->

<!-- #region skills -->
<div class="col-12 content-gray-technologie">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h3>Skills</h3>
                <p>Viaro's teams have extensive knowledge in Python, Django, scalability, and more.</p>
                <p>We provide efficient programs and code that is well architected and provides an enhanced user experience. Our expertise is in the following areas:</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="bullets">
                    <li>Custom and extended native Django Administration</li>
                    <li>Class Based View</li>
                    <li>Permission and Security</li>
                    <li>Use of multiple data sources and databases</li>
                    <li>Front-end
                        <ul class="bullets">
                            <li>Bootstrap</li>
                            <li>JavaScript</li>
                            <li>JQuery</li>
                            <li>AngularJS</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12">
                <ul class="bullets">
                    <li>Build RESTful API</li>
                    <li>SSO Authentication (for example Google Auth, OAuth 2.0, OpenID)</li>
                    <li>Third-party API integration</li>
                    <li>Use of Celery for background task execution</li>
                    <li>Integration with email delivery provides such as SendGrid, Amazon, others.</li>
                    <li>Memcache</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion skills -->

<?php get_footer(); ?>