<?php 
    /* Template Name: E-Learning Template */
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
                <h2 class="dedicated-title">We provide complete  <span class="text-orange">e-Learning</span> solutions where technology, methodologies, content development, and deployment strategies join together.</h2>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion descriptiont -->

<div class="bar-bg"></div>

<!-- #region E-Learning Technologies -->
<div class="col-md-12 content-gray">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12 technologies-service-carousel-big">
                <h2>E-Learning Technologies</h2>
                <br><br>
                <div id="carouselHistoryIndicators"  class="carousel slide customer-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselHistoryIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselHistoryIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner customer-item">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/moodle.png" alt="moodle"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/sakai.png" alt="sakai"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/ilias.jpg" alt="ilias"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/efront.png" alt="efront"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/claroline.png" alt="claroline"></div>
                                <div class="col-sm"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/lnr.png" alt="lnr"></div>
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
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/moodle.png" alt="moodle"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/sakai.png" alt="sakai"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/ilias.jpg" alt="ilias"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/efront.png" alt="efront"></div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-comments">
                            <div class="row justify-content-center">
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/claroline.png" alt="clarolinee"></div>
                                <div class="col-4"><img class="d-block w-100 carousel-techologies-img" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/lnr.png" alt="lnr"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion E-Learning Technologies -->

<!-- #region Features -->
<div class="col-md-12 content-white-technologie">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h5>Technical Services for the supported LMS/LCMS</h5>
                <ul class="bullets">
                    <li>Installation &amp; Configuration</li>
                    <li>Custom development and extensions</li>
                    <li>Integration with third party systems</li>
                    <li>Upgrades</li>
                    <li>Applying enhancements and corrections</li>
                    <li>Hosting and full management</li>
                    <li>Development Training</li>
                    <li>Template Design and customization</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <h5>Wide experience in building e-Learning tools for:</h5>
                <ul class="bullets">
                    <li>Learning Analytics</li>
                    <li>Custom Reporting</li>
                    <li>Content Development Tools</li>
                    <li>Dynamic Learning Templates</li>
                    <li>Advanced Assessment Tools</li>
                    <li>Assignment Management</li>
                    <li>Course organizers</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Features -->

<!-- #region E-LEARNING PROJECTS -->
<div class="col-md-12 content-gray-technologie">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>E-LEARNING PROJECTS & PRODUCTION</h2>
                <p><strong>E-Learning Games:</strong>  experience in creating e-Learning games for children and adults, using current technologies such as HTML5 & Flash. Full production cycle, including conceptualization, interaction design, screen building & sketches, graphical arts, animation and development.</p>
                <p><strong>E-learning Consulting:</strong></p>
                <ul class="bullets">
                    <li>Project Planning</li>
                    <li>Deployment Strategies</li>
                    <li>Training</li>
                </ul>
                <p><strong>E-Learning Rapid Course Development:</strong> Viaro Networks has a group of expert professionals and consultants for the design of e- learning courses, among our services are:</p>
                <p><strong>Pedagogical Consultancy:</strong> to apply educational and pedagogical models for e-Learning development, leveraging the best practice to get the a higher ROI (Return of Investment).</p>
                <p><strong>Instructional Design:</strong> use instructional design techniques for e-Learning and for curricular design in order to build online courses.</p>
                <p><strong>Learning Activities:</strong> use several models for creating relevant and effective online activities within the defined learning objectives.</p>
                <p><strong>Interactive Learning Objects:</strong> interactive learning activities, using flash and/or html5, audio, video, images and other resources to enhance the learning process.</p>
                <p>The development of the e-Learning courses is completely custom made to the customer requirements, contact one of our expert consultants to elaborate the right solution for your needs. Contact our sales representatives for further information and questions regarding our services.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion E-LEARNING PROJECTS -->

<!-- #region Features -->
<div class="col-md-12 content-white-technologie">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2>VIARO LEARNING SUITE</h2>
                <p>The <strong>VIARO Learning Suite </strong> is an exclusive distribution of your selected LMS; It is certified, tested and fully supported by Viaro. As a result you get the open source innovation with enterprise class support.</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="img-fluid rounded mx-auto d-block" src="<?php bloginfo('template_url'); ?>/assets/images/solutions/orangebox.jpg" alt="orangebox">   
            </div>
        </div>
    </div>
</div>
<!-- #endregion Features -->

<!-- #region  LEARNING SUITE  -->
<div class="col-md-12 content-gray-technologie">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3>VIARO LEARNING SUITE INCLUDES:</h3><br>
            </div>
            <div class="col-lg-6 col-md-12">
                <ul class="bullets li-18x">
                    <li>Installation and configuration</li>
                    <li>Basic customization, including its own template design.</li>
                    <li>An stable and tested version of the LMS open source base project</li>
                    <li>Periodic upgrades as new releases as they become available (2-4 yearly), full tested and administered</li>
                    <li>Keep the open source license that allows you to view and modify your files as you need.</li>
                    <li>No licenses of any type.</li>
                    <li>Continuous Monitoring and Trouble Support.</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-12">
                <ul class="bullets li-18x">
                    <li>Administrative Training</li>
                    <li>End User Manuals</li>
                    <li>Enhancements and corrections when you need them.</li>
                    <li>Fully guaranteed and supported by Viaro Networks.</li>
                    <li>Oracle, Postgres, Mysql database. (Database dependent to LMS choice. Oracle must be licensed separately.)</li>
                    <li>All the Open Source freedom!</li>
                </ul>
            </div>
            <div class="col-12 p-18x p">
                <p>Who need the <strong>VIARO Learning Suite?</strong> Corporations, NGO, Governmental and Academics Institutions that are interested in:</p>
                <ul class="bullets li-18x">
                    <li>Install, Configure and Maintain Professionally an LMS</li>
                    <li>Outsource of deployment of an LMS</li>
                    <li>Use an Open Source LMS but with Enterprise Class Support</li>
                    <li>Looking for Peace of mind on your mission-critical applications</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion  LEARNING SUITE  -->

<!-- #region Features -->
<div class="col-md-12 content-white-technologie">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center embed-learning">
                <h4>LEARNING MANAGEMENT SYSTEMS, CUSTOM SOFTWARE DEVELOPMENT FOR E-LEARNING, AND E-LEARNING SERVICES.</h4> <br>
                <embed id="embed-learning" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" wmode="transparent" quality="high" src="https://www.viaro.net/vlsING.swf" class="center-block" width="650" height="450">
            </div>
        </div>
    </div>
</div>
<!-- #endregion Features -->

<!-- #region LEARNING MANAGEMENT SYSTEM -->
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
<!-- #endregion LEARNING MANAGEMENT SYSTEM -->

<?php get_footer(); ?>