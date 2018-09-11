<?php
    /* Template Name: Web App Development Tempalte */
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

<!-- #region Applications Tailored -->
<div class="col-md-12 delivering applications-tailored">
    <div class="container">
        <div class="row">
            <div class="col-12 applications-tailored-text">
                <br>
                <i class="fab fa-css3 applications-tailored-text-icon"></i>
                <h2 class="dedicated-title">We Make Web  <span class="text-orange">to Your Business Goals </span> results</h2>
                <p class="dedicated-text">Each problem has a solution. We create the best solutions for our clients. Quality software development from start to finish.</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Applications Tailored-->

<div class="bar-bg"></div>

<!-- #region Enterprise   -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise ">
    <div class="container">
        <div class="row service-content-big">
            <div class="col-md-6 col-sm-12">
                <h2>Development of Enterprise Web Apps</h2>
                <p>We create enterprise Web apps, including:</p>
                <ul>
                    <li>Enterprise resource planning solutions</li>
                    <li>Billing/payment systems</li>
                    <li>HRM and CRM systems</li>
                    <li>Healthcare systems</li>
                    <li>e-Learning and LMS systems</li>
                    <li>Content management systems</li>
                    <li>Project management applications</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <img class="d-block w-100 rounded mx-auto img-float-right-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/dev-enterprise.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Enterprise  -->

<!-- #region Mobile Development Web -->
<div class="col-md-12 content-white-service service-text-gray">
    <div class="container">
        <div class="row service-content-big">
            <div class="col-md-6 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/web-portal.jpg"/>
            </div>
            <div class="col-md-6 col-sm-12 service-div-text">
                <h2>Development of Web Portals</h2>
                <p>Web portals for businesses of all kinds, from news and media to e-learning, manufacturing, entertainment, intranets, enterprise portals, and more</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Mobile Development Web -->

<!-- #region Development of E-Commerce-->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2>Development of E-Commerce</h2>
                <p>e-Commerce solutions for online stores, auctions, and marketplaces.</p>
                <ul>
                    <li>B2C e-commerce solutions</li>
                    <li>B2B e-commerce portals</li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <img class="d-block w-100 rounded mx-auto img-float-right-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/ecommerce.png"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Development of E-Commerce-->

<!-- #region API Interoperability Services -->
<div class="col-md-12 content-white-service service-text-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/API.png"/>
            </div>
            <div class="col-md-6 col-sm-12  service-div-text">
                <h2>API Interoperability Services</h2>
                <p>We perform API application interoperability to help our clients enhance and expand their current and new business processes.</p>
                <ul>
                    <li>Google APIs</li>
                    <li>Social networks APIs (Facebook, LinkedIn, Twitter)</li>
                    <li>Others</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion API Interoperability Services -->

<!-- #region Business Analysis -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2>Business Analysis</h2>
                <p>We believe that the basis of a project's success is a complete analysis of its concept. We will bring our experience and expertise to help you analyze the idea or business need so that you can apply the best solution.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img class="d-block w-100 rounded mx-auto img-float-right-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/bus-analysis.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Business Analysis -->

<!-- #region API Data Management -->
<div class="col-md-12 content-white-service service-text-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/data-management.jpg"/>
            </div>
            <div class="col-md-6 col-sm-12  service-div-text">
                <h2>Data Management</h2>
                <p>As the Web app grows, you need a partner to help you access and manage all the information coming in. We'll assist you in organizing and managing data so that all you need to know is at your fingertips.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Data Management -->

<!-- #region Programming -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2>Programming</h2>
                <p>Our team is limited to professionals with more than five years' experience in the field. And our Agile principles mean that you will be in on the process as an active participant.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img class="d-block w-100 rounded mx-auto img-float-right-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/programming.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Programming -->

<!-- #region Testing and QA -->
<div class="col-md-12 content-white-service service-text-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/test-qa.jpg"/>
            </div>
            <div class="col-md-6 col-sm-12  service-div-text">
                <h2>Testing and QA</h2>
                <p>Users hate bugs, so we do, too. Our QA processes and extensive testing are here to make sure the software is as clean as can be.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Testing and QA -->

<!-- #region Software Development -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2>Software Development</h2>
                <p>Viaro assists in the deployment, scaling, and maintenance of your ready-for-production Web solution. We will help you make sure it works as designed.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img class="d-block w-100 rounded mx-auto img-float-right-service" src="<?php bloginfo('template_url'); ?>/assets/images/services/software-dev.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Software Development -->

<!-- #region UX/UI Development -->
<div class="col-md-12 content-white-service service-text-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service" src="<?php bloginfo('template_url'); ?>/assets/images/services/UX.jpg"/>
            </div>
            <div class="col-md-6 col-sm-12  service-div-text">
                <h2>UX/UI Development</h2>
                <p>Customer loyalty comes more easily with good UI and UX. We know how to create seamless and efficient user flows. We have a handle on how users interact with Web apps.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion UX/UI Development -->

<!-- #region Technologies -->
<div class="col-md-12 content-gray">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12 technologies-service-carousel-big">
                <h2>Technologies</h2>
                <br><br>
                <div id="carouselHistoryIndicators"  class="carousel slide customer-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHistoryIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner customer-item">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/visual.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/jquery.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/angular.jpg" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/js.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/aspnet.png" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ajax.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ember.png" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/bootstrap.png" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/sql.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/postgres.gif" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/oracle.png" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/html5.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/magento.png" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/php.png" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/laravel.png" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/wordpress.png" alt="3 slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 technologies-service-carousel-smaller">
                <h2>Technologies</h2>
                <br><br>
                <div id="carouselHistoryIndicatorsSmaller" class="carousel customer-carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="1"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="2"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="3"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="4"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="5"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="6"></li>
                        <li data-target="#carouselHistoryIndicatorsSmaller" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/visual.jpg" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/jquery.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/angular.jpg" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/js.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/aspnet.png" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ajax.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ember.png" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/bootstrap.png" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/sql.jpg" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/postgres.gif" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/oracle.png" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/html5.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/magento.png" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/php.png" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/laravel.png" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/wordpress.png" alt="3 slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Technologies -->

<!-- #region comments -->
<div class="col-12 content-white comments-services text-gray">
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

<?php get_footer(); ?>

