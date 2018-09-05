<?php
    /* Template Name: Desktop Application Development Tempalte */
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
            <div class="col-12 content-desktop-title applications-desktop-text">
                <br>
                <i class="fab fa-windows applications-tailored-text-icon"></i>
                <h2 class="dedicated-title">Windows   <span class="text-orange">desktop  </span> technology</h2>
                <p class="dedicated-text">Each problem has a solution. We create the best solutions for our clients. Quality software development from start to finish.</p>
                <br>
            </div>
        </div>
    </div>
</div>
<!-- #endregion Applications Tailored-->

<div class="bar-bg"></div>

<!-- #region UI STACK   -->
<div class="col-md-12 content-gray-service service-text-gray ui-stack">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-orange">UI STACK FOR DESKTOP APPLICATIONS</h3>
                <br>
                <h4>.NET Windows Presentation Foundation (WPF)</h4>
                <p>The preferred technology for desktop applications, good for handling complex UIs and graphics-intensive interfaces.</p>
                <ul>
                    <li>Takes advantage of XAML views.</li>
                    <li>Leverages asynchronous capabilities (async/await) in .NET 4.5.</li>
                    <li>Development is similar to Windows Store; migration from WPF to Windows Store apps is easier compared to migration from Windows Forms.</li>
                </ul>
                <h4>.NET Windows Forms</h4>
                <p>The first UI technology in the .NET Framework for desktop applications.</p>
                <ul>
                    <li>A good fit for many desktop applications.</li>
                    <li>Windows Forms is easier to use and more lightweight than WPF for simple scenarios.</li>
                    <li>Does not use XAML; this implies that extending your application to Windows Phone or Windows Store requires a complete re-write of the UI.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- #endregion UI STACK  -->

<!-- #region Desktop Description -->
<div class="col-md-12 desktop-description">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12">
                <h4>Model-View-ViewModel design pattern (MVVM)</h4>
                <p>In WPF, it's easy to build applications using the MVVM pattern. Get a comprehensive separation of presentation from application state, logic, and behaviors: improves the creation of maintainable code to be shared among multiple devices.</p>
                <h4>Portable class libraries</h4>
                <p>This allows sharing among multiple platforms: desktop, Windows Store, Windows Phone, and other applications. A practical approach to multi-platform development by implementing your client logic with .NET portable libraries.</p>
                <h4>Modernize your user experience</h4>
                <p>Modernize your user experience with the latest .NET innovations for the user experience.</p>
            </div>  
        </div>
    </div>
</div>
<!-- #endregion Desktop Description -->

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