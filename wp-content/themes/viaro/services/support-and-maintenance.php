<?php
    /* Template Name: Support & Maintenance Tempalte */
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

<!-- #region reduce software  -->
<div class="col-md-12 delivering">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="dedicated-title">We help to <span class="text-orange">reduce  </span> software system total cost of ownership <span class="text-orange">(TCO)  </span></h2>
                <p class="dedicated-text">Time and experience have proven that professional maintenance and support is how to reduce any system's total cost of ownership. We go beyond availability app modules to ensure that the whole IT-infrastructure is optimized both technically and from a cost perspective. This means that improvements are made as needed, so it runs with the highest reliability.</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion reduce software -->

<div class="bar-bg"></div>

<!-- #region Level support   -->
<div class="col-md-12 content-gray-service support-services ">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/maintenance.png" alt="qa" class="icon">
                        <h4>Application Maintenance</h4>
                        <p>Level support services whether the applications were developed by Viaro or by another vendor. Viaro professional services include:</p>
                        <ul class="bullets">
                            <li>Detection of issues, diagnosis, analysis, and delivery of solutions</li>
                            <li>Hot fixes and workaround provision</li>
                            <li>Upgrades and new releases</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/enhancement2.png" alt="qa" class="icon">
                        <h4>Application Enhancement</h4>
                        <p>Professional functionality development of the new application, including migration or extension of the current or legacy system for usability.</p>
                    </div>
                    <div class="col-4">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/services/icons/monitoring.png" alt="qa" class="icon">
                        <h4>System Monitoring</h4>
                        <p>We ensure system uptime via 24/7 monitoring of apps, hardware, and system performance. Your support team is automatically alerted the moment your system is somewhat affected so that your application won't go down or become overloaded.</p>
                        <ul class="bullets">
                            <li>Monitoring of applications</li>
                            <li>Monitoring of servers</li>
                            <li>Management of network and remote connectivity</li>
                            <li>Management of event logs</li>
                            <li>Backup and recovery</li>
                        </ul>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<!-- #endregion Level support  -->

<!-- #region Support Service Level Agreement -->
<div class="col-md-12 content-white-service support-service-level-agree">
    <div class="container">
        <div class="row">
            <div class="col-12 support-level-only-img">
                <h2>Support Service Level Agreement</h2>
                <p>Viaro provides support services in accordance with the Support Service Level Agreement, which defines the exact scope, quality, and responsibilities of the services involved.</p>
                <img class="d-block w-100 rounded mx-auto img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/services/supportlevel.png"/>
            </div>
            <div class="col-12 support-level-only-carousel">
                <h2>Support Service Level Agreement</h2>
                <p>Viaro provides support services in accordance with the Support Service Level Agreement, which defines the exact scope, quality, and responsibilities of the services involved.</p>
                <div id="carouselSupportServices" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselSupportServices" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselSupportServices" data-slide-to="1"></li>
                        <li data-target="#carouselSupportServices" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-comments-service">
                            <div class="row">
                                <div class="col-12">
                                    <h2>1 Level <i class="fas fa-users"></i></h2>
                                    <p>When you notify us that you suspect a problem, we deliver Level 1 support.<p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments-service">
                            <div class="row">
                                <div class="col-12">
                                    <h2>2 Level <i class="fas fa-chart-pie"></i></h2>
                                    <p>The software engineer provides this service by helping to reproduce the problem.<p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments-service">
                            <div class="row">
                                <div class="col-12">
                                    <h2>3 Level <i class="fas fa-chart-pie"></i></h2>                                    
                                    <p>This is the full-cycle troubleshooting: we isolate the code defects or any other technical failures and then provide fixes and corrected bugs.<p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Support Service Level Agreement -->

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