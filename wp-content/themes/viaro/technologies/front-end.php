
<?php 
    /* Template Name: Front-End Template */
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
                <h2 class="dedicated-title">Angular<span class="text-orange">JS</span>, Ember<span class="text-orange">JS</span>, JQuery, HTML5</h2>
                <p class="dedicated-text">Front-end developer architects create Web applications that run natively in a Web browser to enhance the user experience. We do this using Web technologies (i.e., HTML5, CSS, and JavaScript).</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion descriptiont -->

<div class="bar-bg"></div>

<!-- #region AngularJS -->
<div class="col-12 content-gray-technologie">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 p-18x">
                <h3>AngularJS</h3><br>
                <p>Google's AngularJS is a leading framework used for front-end Web applications. It provides enhanced flexibility and an MVC-like approach.</p>
                <ul class="bullets li-18x">
                    <li>Flexible MVC approach</li>
                    <li>Reusable HTML Components</li>
                    <li>Custom UI declarations</li>
                    <li>Test-driven development approach</li>
                    <li>Build your Web front-end in a single page</li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-12">
                <img class="img-fluid rounded mx-auto d-block image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/angularjs.png" alt="angularjs">
            </div>
        </div>
    </div>
</div>
<!-- #endregion AngularJS -->

<!-- #region EmberJS -->
<div class="col-12 content-white-technologie">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 order-lg-first order-last">
                <img class="img-fluid rounded mx-auto d-block image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/ember-js-icon.png" alt="ember-js-icon">
            </div>
            <div class="col-lg-6 col-md-12 p-18x">
                <h3>EmberJS</h3><br>
                <p>Ember.js is a front-end MVC framework for large Web applications. It provides great features that compete with those of native apps.</p>
            </div>
        </div>
    </div>
</div>
<!-- #endregion EmberJS -->

<!-- #region JQUERY, HTML5, CSS, BOOTSTRAP -->
<div class="col-12 content-gray-technologie">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 p-18x">
                <h3>JQUERY, HTML5, CSS, BOOTSTRAP</h3><br>
                <p>The foundation for front-end Web application is HMTL, CSS, and JavaScript. JQuery has become a very popular library to deal with browser-based applications, effects, etc. </p>
                <p>One of the key elements in the development process or as a separate domain is front-end development services. These services include:</p>
                <ul class="bullets li-18x">
                    <li>Valid HTML5 markup construction</li>
                    <li>Responsive CSS-driven page layouts using Bootstrap</li>
                </ul>
                <p>JQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</p>
            </div>
            <div class="col-lg-6 col-md-12">
                <img class="img-fluid rounded mx-auto d-block image-scrolling" src="<?php bloginfo('template_url'); ?>/assets/images/technologies/front-boot2.png" alt="front-boot2">
            </div>
        </div>
    </div>
</div>
<!-- #endregion JQUERY, HTML5, CSS, BOOTSTRAP -->

<?php get_footer(); ?>