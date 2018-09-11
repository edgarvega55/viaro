<?php 
    /* Template Name: Custom Software Development Template */
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

<!-- #region Delivering -->
<div class="col-md-12 delivering">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <h2 class="dedicated-title">Delivering  <span class="text-orange">outstanding </span> results</h2>
                <p class="dedicated-text">Viaro delivers. We are your long-term, reliable partner, here to collaborate on innovative applications and systems that will set you apart from the competition. Together, we'll surprise and delight your customers.</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Delivering-->

<div class="bar-bg"></div>

<!-- #region experienced -->
<div class="col-md-12 experienced ">
    <div class="container">
        <div class="row experienced-big">
            <div class="col-6">
                <p id="experienced-text"> Viaro is your experienced development partner. We deliver cost-effective and reliable custom software solutions that match your unique requirements. We provide everything from tailored customization of your current platforms to new, full-cycle customized applications. And it's all built to match your vision.</p>
            </div>
            <div class="col-6 experienced-text-list">
                <p>We can build any application that you need, allowing you to outsource all or specific pieces of your software development. We can integrate with your already built software product and current developments, update any portion of the system, enhance specific areas, add new features, etc.</p>
                <ul>
                    <li>Development of new applications</li>
                    <li>Interoperability &amp; customization of applications</li>
                    <li>Migration &amp; enhancement of legacy applications</li>
                    <li>Support, maintenance, &amp; continuous improvement of applications</li>
                    <li>Project rescue</li>
                </ul>
                <br>
            </div>
        </div>
        <div class="row experienced-little">
            <div class="col-md-12 experienced-little">
                <div class="col-12 experienced-text-list">
                    <p> Viaro is your experienced development partner. We deliver cost-effective and reliable custom software solutions that match your unique requirements. We provide everything from tailored customization of your current platforms to new, full-cycle customized applications. And it's all built to match your vision.</p>
                    <p>We can build any application that you need, allowing you to outsource all or specific pieces of your software development. We can integrate with your already built software product and current developments, update any portion of the system, enhance specific areas, add new features, etc.</p>
                    <ul>
                        <li>Development of new applications</li>
                        <li>Interoperability &amp; customization of applications</li>
                        <li>Migration &amp; enhancement of legacy applications</li>
                        <li>Support, maintenance, &amp; continuous improvement of applications</li>
                        <li>Project rescue</li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion experienced -->

<!-- #region Interoperability -->
<div class="col-md-12 content-white text-gray image-shadow">
    <div class="container">
        <div class="row interoperability-big">
            <div class="col-8">
                <h2>Enterprise Systems Development and Interoperability</h2>
                <p>"No matter how simple or complex your needs are, we have the skills to build your enterprise solution."</p>
                <p>Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and corporate portals, and other business domains.</p>
            </div>
            <div class="col-4">
                <img class="d-block w-100 rounded mx-auto image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/devintegration.jpg"/>
            </div>
        </div>
        <div class="row interoperability-little">
            <div class="col-12">
                <h2>Enterprise Systems Development and Interoperability</h2>
                <p>"No matter how simple or complex your needs are, we have the skills to build your enterprise solution."</p>
                <p>Our experience in Business Process Management, Resource Planning, Customer Relationship Management, Collaboration and corporate portals, and other business domains.</p>
                <img class="d-block w-100 rounded mx-auto image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/devintegration.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Interoperability -->

<!-- #region Web and Desktop -->
<div class="col-md-12 content-gray text-gray image-shadow">
    <div class="container">
        <div class="row web-desktop-big">
            <div class="col-5">
                <img class="d-block w-100 rounded mx-auto image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/webdesk.jpg"/>
            </div>
            <div class="col-1"></div>    
            <div class="col-6">
                <h2>Web and Desktop Development</h2>
                <p>Viaro creates feature-rich websites, portals, and custom Web applications for any company or person with a stake in the Internet. We also have excellent expertise in desktop software, and we deliver SaaS solution development, deployment, and support services.</p>
            </div>
        </div>
        <div class="row web-desktop-little">
            <div class="col-12">
                <h2>Web and Desktop Development</h2>
                <p>Viaro creates feature-rich websites, portals, and custom Web applications for any company or person with a stake in the Internet. We also have excellent expertise in desktop software, and we deliver SaaS solution development, deployment, and support services.</p>
                <img class="d-block w-100 rounded mx-auto image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/webdesk.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Web and Desktop -->

<!-- #region Mobile Application  -->
<div class="col-md-12 content-white text-gray image-shadow">
    <div class="container">
        <div class="row mobile-app-big">
            <div class="col-8">
                <h2>Mobile Application Development</h2>
                <p>Viaro makes sure that your app go to popular mobile platforms (iOS, Android, Windows Phone, and others). If you want to connect your customers, providers, collaborators, and employees to your Web portals, if you need to create a new mobile app, or if It's time to connect the app to a third-party service, we are your partner.</p>
            </div>
            <div class="col-4">
                <img class="d-block w-100 rounded mx-auto image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/mobileapp.jpg"/>
            </div>
        </div>
        <div class="row mobile-app-little">
            <div class="col-12">
                <h2>Mobile Application Development</h2>
                <p>Viaro makes sure that your app go to popular mobile platforms (iOS, Android, Windows Phone, and others). If you want to connect your customers, providers, collaborators, and employees to your Web portals, if you need to create a new mobile app, or if It's time to connect the app to a third-party service, we are your partner.</p>
                <img class="d-block w-100 rounded mx-auto image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/services/mobileapp.jpg"/>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Mobile Application -->

<!-- #region contract  -->
<div class="col-md-12 content-gray contract">
    <div class="bar-bg"></div>
    <div class="circle-bg"></div>
    <div class="container">
        <div class="row contract-big">
            <div class="col-12">
                <br>
                <h2>How Does It Work? How To Contract and Start an Outsourced Software Development Project?</h2>
                <br>
                <p class="text-contract">It's simple. Just contract us and we will assign a team consisting of one project manager and the required software engineers and architects to meet your product needs and deadlines. The team can start immediately on your project. We assign project managers for all of our customers to enable them to follow up in detail with all of the work being done.</p>
                <div class="row contract-sections">
                    <div class="col-4">
                        <h5>Best Engineering Practices for Project Execution</h5>
                        <p>Viaro has extensive implementation expertise in all tech methodologies, so we know how to use only the most efficient practices. We meet your needs efficiently, adding nothing you don't need. Our mature and dedicated project managers always focus on the essential elements:</p>
                        <ul class="bullets">
                            <li>Clear communication throughout the project</li>
                            <li>Management requirements</li>
                            <li>Change and risk management</li>
                            <li>Quality assurance</li>
                            <li>Continual reporting and deliverables</li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h5>Optimal Technical Implementation</h5>
                        <p>Viaro has 15 years of experience in custom software development. We have comprehensive expertise in a wide array of technologies, which enables us to execute complex projects in a way that satisfies technical requirements and goes beyond customer expectations.</p>
                        <p>Each project gets the right team of developers, software architects, analysts, and project managers. We bring our hard-won knowledge in the technical and business domains to every customer and every solution. You'll get more than you thought possible.</p>
                    </div>
                    <div class="col-4">
                        <h5>Maximum Quality Control</h5>
                        <p>We know that quality assurance you can count on is at the core of any product. Viaro provides an independent QA Department that is highly professional and takes responsibility for your software quality assurance.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contract-little">
            <div class="col-12">
                <br>
                <h2>How Does It Work? How To Contract and Start an Outsourced Software Development Project?</h2>
                <br>
                <p class="text-contract">It's simple. Just contract us and we will assign a team consisting of one project manager and the required software engineers and architects to meet your product needs and deadlines. The team can start immediately on your project. We assign project managers for all of our customers to enable them to follow up in detail with all of the work being done.</p>
                <h5>Best Engineering Practices for Project Execution</h5>
                <p>Viaro has extensive implementation expertise in all tech methodologies, so we know how to use only the most efficient practices. We meet your needs efficiently, adding nothing you don't need. Our mature and dedicated project managers always focus on the essential elements:</p>
                <ul class="bullets">
                    <li>Clear communication throughout the project</li>
                    <li>Management requirements</li>
                    <li>Change and risk management</li>
                    <li>Quality assurance</li>
                    <li>Continual reporting and deliverables</li>
                </ul>
                <h5>Optimal Technical Implementation</h5>
                <p>Viaro has 15 years of experience in custom software development. We have comprehensive expertise in a wide array of technologies, which enables us to execute complex projects in a way that satisfies technical requirements and goes beyond customer expectations.</p>
                <p>Each project gets the right team of developers, software architects, analysts, and project managers. We bring our hard-won knowledge in the technical and business domains to every customer and every solution. You'll get more than you thought possible.</p>
                <h5>Maximum Quality Control</h5>
                <p>We know that quality assurance you can count on is at the core of any product. Viaro provides an independent QA Department that is highly professional and takes responsibility for your software quality assurance.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion contract -->


<!-- #region CommentsServices  -->
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
<!-- #endregion CommentsServices  -->
<?php get_footer(); ?>