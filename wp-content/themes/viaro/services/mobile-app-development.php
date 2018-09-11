<?php
    /* Template Name: Mobile App Development Tempalte */
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

<!-- #region Call -->
<div class="col-md-12 delivering">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="dedicated-title">Your company and  <span class="text-orange">your apps </span> need to be unique.</h2>
                <p class="dedicated-text">We start building your world-class app with a phone call.</p>
                <p class="dedicated-text">Call: <span class="text-orange"> 888-962-2774 </span> </p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Call -->

<div class="bar-bg"></div>

<!-- #region B2C  -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul>
                    <li class="text-big">B2C solutions for anyone: telecommunication, retail chains, healthcare, Internet services.</li>
                    <li class="text-big">Enterprise software (corporate systems, mobile workflows, CRM mobile clients, etc.).</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion B2C -->

<!-- #region Technologies -->
<div class="col-md-12 content-white">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12 technologies-service-carousel-big">
                <h2>Technologies</h2>
                <br><br>
                <div id="carouselHistoryIndicators"  class="carousel slide customer-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHistoryIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner customer-item">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/js.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/xamarin.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/appcelerator.png" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ios.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/android.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/winphone.jpg" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/phonegap.png" alt="4 slide"></div>
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
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/js.jpg" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/xamarin.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/appcelerator.png" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ios.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/android.jpg" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/winphone.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/phonegap.png" alt="3 slide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Technologies -->

<!-- #region API Data Performance -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h2>Performance</h2>
                <p>How do we accelerate mobility performance? Viaro fine-tunes loads and creates backend environments that can handle your app scalability needs. We implement the best performance and efficient resource consumption techniques. We focus on a simple, intuitive, and fast UI.</p>
            </div>
            <div class="col-md-5 col-sm-12">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/performance.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Data Performance -->

<!-- #region API Data Security -->
<div class="col-md-12 content-white-service service-text-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/security.jpg"/>
            </div>
            <div class="col-md-6 col-sm-12  service-div-text">
                <h2>Security</h2>
                <p>Right from the beginning of app development, Viaro follows the best security practices and standards. We lower risks through use of the best authentication practices. Additionally, we use encrypted communication to protect your data.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Data Security -->

<!-- #region Interoperability -->
<div class="col-md-12 content-gray-service service-text-gray service-enterprise">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-sm-12  service-div-text">
                <h2>Interoperability</h2>
                <p>We make sure that your apps are interoperable and can integrate, no matter the software and sources, using the best interoperability solutions according to your infrastructure requirements.</p>
            </div>
            <div class="col-md-5 col-sm-12 service-div-img">
                <img class="d-block w-100 rounded mx-auto img-float-left-service image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/interoperability.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Interoperability -->

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

<?php 
    get_footer(); 
?>