<?php 
    /* Template Name: Home Template */
    get_header();
?>

<!-- #region carousel -->
<div id="Maincarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#Maincarousel" data-slide-to="0" class="active"></li>
        <li data-target="#Maincarousel" data-slide-to="1"></li>
        <li data-target="#Maincarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item main-carousel-item active">
            <img class="d-block w-100 center" src="<?php bloginfo('template_url'); ?>/assets/images/carousel-1.jpg" alt="First slide" height="582">
            <div class="carousel-caption  content-carousel d-md-block">
                <h1>Premium Software</h1>
                <h1>Development</h1>
                <h2 class="text-orange">.Net C# Java Angular JS iOS Android Oracle Django </h2>
                <h2>Great technologies to create awesome products.</h2>
                <a href="" class="btn btn-lg background-orange text-white btn-details" >
                    <i class="fas fa-link"></i>
                    | Details
                </a>
            </div>
        </div>
        <div class="carousel-item main-carousel-item">
            <img class="d-block w-100 center" src="<?php bloginfo('template_url'); ?>/assets/images/carousel-2.jpg" alt="Second slide" height="582" >
            <div class="carousel-caption content-carousel d-md-block">
                <h1>Custom Software Development</h1>
                <h2>Superior <span class="text-orange">Technological Development with the Best Quality</span>Assurance Viaro is your cost-effective and reliable partner to provide custom software solutions tailored to your requirements. We provide everything from customization of your current platforms to new, full-cycle customized applications. And It's all built to match your vision.</h2>
                <a href="" class="btn btn-lg background-orange text-white btn-details" >
                    <i class="fas fa-link"></i>
                    | Details
                </a>
            </div>
        </div>
        <div class="carousel-item main-carousel-item">
            <img class="d-block w-100 center" src="<?php bloginfo('template_url'); ?>/assets/images/carousel-3.jpg" alt="Third slide" height="582">
            <div class="carousel-caption  content-carousel  d-md-block">
                <h1>Mobile, Web and Desktop Apps.</h1>
                <h1>Software Testing and Quality Assurance</h1>
                <h2>For every challenge, we bring the best solutions for our clients. Quality assurance from start to finish.</h2>
                <a href="" class="btn btn-lg background-orange text-white btn-details" >
                    <i class="fas fa-link"></i>
                    | Details
                </a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#Maincarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#Maincarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- #endregion carousel-->

<div class="bar-bg"></div>
<div class="circle-bg"></div>

<!-- #region Articles-->
<div class="col-md-12 articles-home">
    <div class="container">
        <div class="row">
            <div class="row justify-content-md-center">
                <div class="col-sm-4">
                    <div class="card card-article">
                        <div class="card-body card-article-body">
                            <img class="" src="<?php bloginfo('template_url'); ?>/assets/images/webDevelopment.png" alt="Card image cap">
                            <h3 class="title-article-card-body">Web Development</h3>
                            <p class="text-article-card-body">Viaro develops highly interactive and innovative Web apps, websites, or portals for any type of organization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-article">
                        <div class="card-body card-article-body">
                            <img class="" src="<?php bloginfo('template_url'); ?>/assets/images/mobile.png" alt="Card image cap">
                            <h5 class="title-article-card-body">Mobile Apps</h5>
                            <p class="text-article-card-body">We create mobile apps, either standalone apps or apps that connect to your corporate Web services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-article">
                        <div class="card-body card-article-body">
                            <img class="" src="<?php bloginfo('template_url'); ?>/assets/images/desktop22.png" alt="Card image cap">
                            <h5 class="title-article-card-body">Desktop Development</h5>
                            <p class="text-article-card-body">We'll boost your productivity and create familiar, Windows-native user interfaces for enterprise systems, kiosks, devices, and desktop interfaces for Web services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-article">
                        <div class="card-body card-article-body">
                            <img class="" src="<?php bloginfo('template_url'); ?>/assets/images/stest.png" alt="Card image cap">
                            <h5 class="title-article-card-body">Software Testing and Quality Assurance</h5>
                            <p class="text-article-card-body">Our testing services deliver trustworthy quality assurance through professional analysis of your business processes and current systems, whether you are a start-up or a larger corporation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- #endregion Articles-->

<div class="bar-bg"></div>

<!-- #region Dedicated-->
<div class="col-md-12 dedicated">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="dedicated-title">Dedicated <span class="text-orange">Development</span> Center</h2>
                <p class="dedicated-text">Professional Software and QA engineers dedicated full time working for your company and projects. U.S. based or offshore engineers, we can assemble the right mix for your project and budget.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Dedicated-->

<div class="bar-bg"></div>
<div class="circle-bg"></div>

<!-- #region History-->
<div class="container history">
    <div class="row">
        <div class="col-xl-8 col-lg-7 contenedor-div col-md-12 history-big">
            <i class="fas fa-coffee fa-10x history-icon"></i>
            <h3 class="history-text">"15 years delivering high quality software products. Serving customers in U.S., Canada, Europe and Latin-America."</h3>
            <div id="carouselHistoryIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselHistoryIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselHistoryIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselHistoryIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
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
        </div>
        <div class="col-xl-4 col-lg-5 history-two-column">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/arrow_results.png" alt="">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/carousel history/pc.png" alt="">
        </div>

        <!-- screan max 540 px-->
        <div class="col-12 history-little">
            <div class="row">
                <div class="col-12">
                    <i class="fas fa-coffee fa-3x history-icon"></i>
                    <h3 class="history-text">"15 years delivering high quality software products. Serving customers in U.S., Canada, Europe and Latin-America."</h3>
                </div>
                <div class="col-12">                    
                    <div id="carouselHistoryIndicatorsLittle" class="carousel slide" data-ride="carousel">
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
</div>
<!-- #endregion History-->

<div class="bar-bg"></div>

<!-- #region Comments-->
<div class="col-12 commets">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <i class="fas fa-comment comments-icon"></i>
                <div id="carouselComments" class="carousel slide comments-carousel comments-carousel-big" data-ride="carousel">
                    <ol class="carousel-indicators comments-indicators">
                        <li data-target="#carouselComments" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselComments" data-slide-to="1"></li>
                        <li data-target="#carouselComments" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-5 comment-name">
                                    <p> C.R Oldham </p>
                                </div>
                                <div class="col-2">
                                    <img class="d-block w-100 comment-image" src="<?php bloginfo('template_url'); ?>/assets/images/comments/comment-1.png" alt="First slide">
                                </div>
                                <div class="col-5 comment-work">
                                    <p>Former Senior Systems Engineer NCA CASI / SACSCASI</p>
                                </div>
                                <div class="col-12 comment-text">
                                    <p>"All your software developers have been very responsive and a pleasure to work with."</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-5 comment-name">
                                    <p> Khy Huang </p>
                                </div>
                                <div class="col-2">
                                    <img class="d-block w-100 comment-image" src="<?php bloginfo('template_url'); ?>/assets/images/comments/comment-2.png" alt="First slide">
                                </div>
                                <div class="col-5 comment-work">
                                    <p>IT Director - UCLA Computer Technologies Research Lab</p>
                                </div>
                                <div class="col-12 comment-text">
                                    <p>"Viaro has worked with us for several years and shown they have developers trained and ready for projects. Also, they have put in the extra efforts to see projects to completion."</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-5  comment-name">
                                    <p> Jade Rubrick </p>
                                </div>
                                <div class="col-2">
                                    <img class="d-block w-100 comment-image" src="<?php bloginfo('template_url'); ?>/assets/images/comments/comment-3.png" alt="First slide">
                                </div>
                                <div class="col-5 comment-work">
                                    <p>Director of Development TRUiST (Former United Way)</p>
                                </div>
                                <div class="col-12 comment-text">
                                    <p>"I very much appreciate how proactive and on top of things you guys are. Thank you for being such a great company to work with!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-control" href="#carouselComments" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next carousel-control" href="#carouselComments" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div id="carouselCommentsLittle" class="carousel slide comments-carousel comments-carousel-little" data-ride="carousel">
                    <ol class="carousel-indicators comments-indicators">
                        <li data-target="#carouselCommentsLittle" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCommentsLittle" data-slide-to="1"></li>
                        <li data-target="#carouselCommentsLittle" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-7 comment-name">
                                    <p> C.R Oldham </p>
                                </div>
                                <div class="col-5 comment-image">
                                    <img class="d-block w-100 comment-image float-right" src="<?php bloginfo('template_url'); ?>/assets/images/comments/comment-1.png" alt="First slide">
                                </div>
                                <div class="col-12 comment-work">
                                    <p>Former Senior Systems Engineer NCA CASI / SACSCASI</p>
                                </div>
                                <div class="col-12 comment-text">
                                    <p>"All your software developers have been very responsive and a pleasure to work with."</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-7 comment-name">
                                    <p> Khy Huang </p>
                                </div>
                                <div class="col-5">
                                    <img class="d-block w-100 comment-image float-right" src="<?php bloginfo('template_url'); ?>/assets/images/comments/comment-2.png" alt="First slide">
                                </div>
                                <div class="col-12 comment-work">
                                    <p>IT Director - UCLA Computer Technologies Research Lab</p>
                                </div>
                                <div class="col-12 comment-text">
                                    <p>"Viaro has worked with us for several years and shown they have developers trained and ready for projects. Also, they have put in the extra efforts to see projects to completion."</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-7  comment-name float-right">
                                    <p> Jade Rubrick </p>
                                </div>
                                <div class="col-5">
                                    <img class="d-block w-100 comment-image" src="<?php bloginfo('template_url'); ?>/assets/images/comments/comment-3.png" alt="First slide">
                                </div>
                                <div class="col-12 comment-work">
                                    <p>Director of Development TRUiST (Former United Way)</p>
                                </div>
                                <div class="col-12 comment-text">
                                    <p>"I very much appreciate how proactive and on top of things you guys are. Thank you for being such a great company to work with!"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev carousel-control" href="#carouselCommentsLittle" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next carousel-control" href="#carouselCommentsLittle" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Comments-->

<div class="bar-bg"></div>
<div class="circle-bg"></div>

<!-- #region About-->
<div class="container">
    <div class="row">
        <div class="col-12">            
            <h2 class="about-title">About Viaro Networks</h2>
            <p class="about-text">Our mission is to boost your business growth through innovative technology. We provide a comprehensive set of technological competencies and expertise, as well as something money can't buy: the commitment and dedication of our engineering team.</p>
            <p class="about-text">For over 15 years in the software industry, working with customer worldwide, Viaro Networks has been helping customers with app and software development needs, helping to meet their project deadlines and achieve their goals. You can rely on our experience and professionalism for your company.</p>
            <p class="about-text">The company headquarters are in Wilmington, Delaware, have engineers and representatives in several states. The fully-owned offshore software engineering centers are located in strategic places in Latin America.</p>   
            <a class="about-link" href="https://www.viaro.net/elearn/booklet.pdf">Download Brochure</a>
            <br>
            <br>
        </div>
    </div>
</div>
<!-- #endregion -->

<?php get_footer(); ?>