<?php 
    /* Template Name: About Template */
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

<!-- #region VIARO NETWORKS -->
<div class="col-12 delivering">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="dedicated-title"><strong>VIARO NETWORKS</strong></h2>
                <p class="dedicated-text">Founded in 1999, provides full-cycle software development for customers in the U.S., Canada, Europe, and Latin America. Viaro specializes in the development, customization, and interoperability of any type of applications, whether they are Web-, mobile-, or desktop-based. We are experts with the right technological skill set, business-specific knowledge, the industry's best engineering methodologies, and a full commitment to your projects. </p>
                <a class="about-link" href="https://www.viaro.net/elearn/booklet.pdf">Download Brochure</a>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion VIARO NETWORKS-->

<div class="bar-bg"></div>

<!-- #region services -->
<div class="col-12 service-about">
    <h1> Services </h1>
</div>
<div class="bar-bg"></div>
<div class="circle-bg"></div>
<br>
<div class="col-12 text-gray service-about-text service-about-big">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p>Custom Software Development Mobile App Development Web App Development Desktop Application Development</p>
            </div>
            <div class="col-6 service-about-text-icon">
                <p>Software Testing & QA Support & Maintenance Enterprise Application Integration Dedicated Development Center</p>
                <i class="fas fa-coffee fa-10x service-about-icon"></i>                
            </div>
            <div class="col-12">
                <h1>Engagement Models</h1>
                <br>
                <ul class="bullets">
                    <li>Fixed Project</li>
                    <li>Software Support &amp; Maintenance</li>
                    <li>Dedicated Development Center</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-12 text-gray service-about-text service-about-little">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Custom Software Development Mobile App Development Web App Development Desktop Application Development</p>
                <p>Software Testing & QA Support & Maintenance Enterprise Application Integration Dedicated Development Center</p>
            </div>
            <div class="col-12">
                <h1>Engagement Models</h1>
                <br>
                <ul class="bullets">
                    <li>Fixed Project</li>
                    <li>Software Support &amp; Maintenance</li>
                    <li>Dedicated Development Center</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion services -->

<div class="bar-bg"></div>

<!-- #region customers -->
<div class="col-md-12 content-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Customers</h2>
                <br><br>
                <div id="carouselHistoryIndicators"  class="carousel slide customer-carousel customer-carousel-big" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHistoryIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner customer-item">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-1.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-2.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-3.jpg" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-4.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-1.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-2.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-3.jpg" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-4.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-1.jpg" alt="1 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-2.jpg" alt="2 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-3.jpg" alt="3 slide"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-4.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselHistoryIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselHistoryIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="carouselHistoryIndicatorsLittle" class="carousel customer-carousel slide customer-carousel-little" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHistoryIndicatorsLittle" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHistoryIndicatorsLittle" data-slide-to="1"></li>
                        <li data-target="#carouselHistoryIndicatorsLittle" data-slide-to="2"></li>
                        <li data-target="#carouselHistoryIndicatorsLittle" data-slide-to="3"></li>
                        <li data-target="#carouselHistoryIndicatorsLittle" data-slide-to="4"></li>
                        <li data-target="#carouselHistoryIndicatorsLittle" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-1.jpg" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-2.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-3.jpg" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-1-4.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-1.jpg" alt="1 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-2.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-3.jpg" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-2-4.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-6"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-1.jpg" alt="1 slide"></div>
                                <div class="col-6"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-2.jpg" alt="2 slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-3.jpg" alt="3 slide"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-history-img carousel-history-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/history-carousel-3-4.jpg" alt="3 slide"></div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselHistoryIndicatorsLittle" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselHistoryIndicatorsLittle" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion customers -->

<div class="bar-bg"></div>
<div class="circle-bg"></div>

<!-- #region about -->
<div class="col-md-12 content-about">
    <div class="container">
        <div class="row">
            <div class="col-12 content-about-title">
                <h1>Primary Values</h1>   
            </div>  
            <div class="col-6">
                <div class="row about-sections">
                    <div class="col-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about/customers.png" alt="customers" >
                    </div>
                    <div class="col-11 about-content">
                        <h4 class="about-content-text">Customers</h4>
                        <p class="about-content-text">Viaro exists for our customers. We measure ourselves by the success of our clients, so we always give them every possible tool to ensure the growth of their business.</p>
                    </div>
                </div>
                <div class="row about-sections">
                    <div class="col-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about/quality.png" alt="customers" >
                    </div>
                    <div class="col-11 about-content">
                        <h4 class="about-content-text">Quality</h4>
                        <p class="about-content-text">Viaro stands behind every single project we deliver. We value high-quality work, and we believe that great products build the best path to success, both for you and for Viaro.</p>
                    </div>
                </div>
            </div> 
            <div class="col-6">
                <div class="row about-sections">
                    <div class="col-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about/economics.png" alt="customers" >
                    </div>
                    <div class="col-11 about-content">
                        <h4 class="about-content-text">Economics</h4>
                        <p class="about-content-text">At Viaro we make sure that what we are doing has business value, meets business goals, and serves the needs of your business, and stays within budget, to maximize the ROI.</p>
                    </div>
                </div>
                <div class="row about-sections">
                    <div class="col-1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/about/improvement.png" alt="customers" >
                    </div>
                    <div class="col-11 about-content">
                        <h4 class="about-content-text">Improvement</h4>
                        <p class="about-content-text">Every day brings an opportunity to improve our processes. In other words, we strive for excellence in all software development activities through continuous improvement.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 content-about-video">
                <iframe class="about-video" src="https://www.youtube.com/embed/i-hXEeQi3Io" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>   
        </div>
    </div>
</div>
<!-- #endregion about -->

<?php 
    get_footer();
?>