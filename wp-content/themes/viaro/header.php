<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <!-- #region Navbar -->
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/viaro/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/viaro-logo.png" width="100%" height="auto" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarslinks" aria-controls="navbarslinks" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars" id="nav-button"></i>
                </button>

                <div class="my-2 my-md-0">
                    <div class="collapse navbar-collapse" id="navbarslinks">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active-nav" href="http://localhost/viaro/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu navabar-lit-items-black" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://localhost/viaro/services/">Custom Software Development</a>
                                    <a class="dropdown-item" href="http://localhost/viaro/web-app-development/">Web App Development </a>
                                    <a class="dropdown-item" href="http://localhost/viaro/mobile-app-development/">Mobile App Development</a>
                                    <a class="dropdown-item" href="http://localhost/viaro/desktop-application-development/">Desktop Application Development</a>
                                    <a class="dropdown-item" href="http://localhost/viaro/software-testing-qa/">Software Testing & QA</a>
                                    <a class="dropdown-item" href="http://localhost/viaro/support-maintenance/">Support & Maintenance</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Technologies
                                </a>
                                <div class="dropdown-menu navabar-lit-items-black" aria-labelledby="navbarDropdown">
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Solutions
                                </a>
                                <div class="dropdown-menu navabar-lit-items-black" aria-labelledby="navbarDropdown">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portafolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href=" http://localhost/viaro/about">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/viaro/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- #endregion Navbar -->
    </header>