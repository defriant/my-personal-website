<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afif Defriant</title>
    <link rel="stylesheet" href="assets/css/loader.css">
    <link rel="stylesheet" href="assets/font-awesome-pro-master/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/main.css?v=<?= filemtime('assets/css/main.css') ?>">
    <link rel="icon" type="img/png" href="assets/img/web-icon.png">
</head>

<body class="dark loading">
    <div id="c47hlug7ogg">
        <div class="loadingio-spinner-ellipsis-c47hlug7ogg">
            <div class="ldio-mkufdp7o2w">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

    <?php

    // Today's Date
    $today = new DateTime(date('Y-m-d'));

    // Age
    $birthDate = new DateTime('2000-01-17');
    $age = $today->diff($birthDate)->y;

    // Skills Experience
    $webDevStart = new DateTime('2018-06-01');
    if ($today->diff($webDevStart)->y > 0) {
        $webDevExperience = 'more than ' . $today->diff($webDevStart)->y . ' years';
    } else {
        $webDevExperience = 'less than 1 years';
    }

    $htmlStart = new DateTime('2018-06-01');
    if ($today->diff($htmlStart)->y > 0) {
        $htmlExperience = 'More than ' . $today->diff($htmlStart)->y . ' years';
    } else {
        $htmlExperience = 'Less than 1 years';
    }

    $cssStart = new DateTime('2018-06-01');
    if ($today->diff($cssStart)->y > 0) {
        $cssExperience = 'More than ' . $today->diff($cssStart)->y . ' years';
    } else {
        $cssExperience = 'Less than 1 years';
    }

    $javaScriptStart = new DateTime('2019-06-01');
    if ($today->diff($javaScriptStart)->y > 0) {
        $javaScriptExperience = 'More than ' . $today->diff($javaScriptStart)->y . ' years';
    } else {
        $javaScriptExperience = 'Less than 1 years';
    }

    $phpStart = new DateTime('2018-06-01');
    if ($today->diff($phpStart)->y > 0) {
        $phpExperience = 'More than ' . $today->diff($phpStart)->y . ' years';
    } else {
        $phpExperience = 'Less than 1 years';
    }

    $mySqlStart = new DateTime('2018-06-01');
    if ($today->diff($mySqlStart)->y > 0) {
        $mySqlExperience = 'More than ' . $today->diff($mySqlStart)->y . ' years';
    } else {
        $mySqlExperience = 'Less than 1 years';
    }

    $laravelStart = new DateTime('2019-06-01');
    if ($today->diff($laravelStart)->y > 0) {
        $laravelExperience = 'More than ' . $today->diff($laravelStart)->y . ' years';
    } else {
        $laravelExperience = 'Less than 1 years';
    }

    $jqueryStart = new DateTime('2019-06-01');
    if ($today->diff($jqueryStart)->y > 0) {
        $jqueryExperience = 'More than ' . $today->diff($jqueryStart)->y . ' years';
    } else {
        $jqueryExperience = 'Less than 1 years';
    }

    $apiStart = new DateTime('2021-06-01');
    if ($today->diff($apiStart)->y > 0) {
        $apiExperience = 'More than ' . $today->diff($apiStart)->y . ' years';
    } else {
        $apiExperience = 'Less than 1 years';
    }

    $bootstrapStart = new DateTime('2019-06-01');
    if ($today->diff($bootstrapStart)->y > 0) {
        $bootstrapExperience = 'More than ' . $today->diff($bootstrapStart)->y . ' years';
    } else {
        $bootstrapExperience = 'Less than 1 years';
    }

    $materializeCssStart = new DateTime('2020-06-01');
    if ($today->diff($materializeCssStart)->y > 0) {
        $materializeCssExperience = 'More than ' . $today->diff($materializeCssStart)->y . ' years';
    } else {
        $materializeCssExperience = 'Less than 1 years';
    }

    ?>

    <i class="fad fa-sun change-theme" id="theme-button"></i>
    <header class="header" id="header">
        <nav class="nav nav_container" id="nav">
            <div class="nav_menu" id="nav_menu">
                <ul class="nav_list">
                    <li class="nav_item">
                        <a href="#home" class="nav_link active">
                            <i class="fal fa-home nav_icon"></i>Home
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="fal fa-user nav_icon"></i>About
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="fal fa-file-alt nav_icon"></i>Skills
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="fal fa-briefcase nav_icon"></i>Services
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="fal fa-image nav_icon"></i>Portfolio
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="fal fa-phone nav_icon"></i>Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mobile_link">
                <ul class="mobile_nav_list">
                    <li class="mobile_nav_item">
                        <a href="#home" class="mobile_nav_link active">
                            <i class="fal fa-home nav_icon"></i>
                        </a>
                    </li>
                    <li class="mobile_nav_item">
                        <a href="#about" class="mobile_nav_link">
                            <i class="fal fa-user nav_icon"></i>
                        </a>
                    </li>
                    <li class="mobile_nav_item">
                        <a href="#skills" class="mobile_nav_link">
                            <i class="fal fa-file-alt nav_icon"></i>
                        </a>
                    </li>
                    <li class="mobile_nav_item">
                        <a href="#services" class="mobile_nav_link">
                            <i class="fal fa-briefcase nav_icon"></i>
                        </a>
                    </li>
                    <li class="mobile_nav_item">
                        <a href="#portfolio" class="mobile_nav_link">
                            <i class="fal fa-image nav_icon"></i>
                        </a>
                    </li>
                    <li class="mobile_nav_item">
                        <a href="#contact" class="mobile_nav_link">
                            <i class="fal fa-phone nav_icon"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

    <main class="container">
        <section class="home" id="home">
            <div class="home_content">
                <div class="row">
                    <div class="col-2 offset-1 col-lg-1 col-xl-1 home_social animate-bottom">
                        <a href="https://github.com/defriant" target="_blank" class="home_social-icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/afif-defriant-a3214421b/" target="_blank" class="home_social-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.instagram.com/defriiant/" target="_blank" class="home_social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="col-9 col-lg-5 col-xl-4 home_img animate-center">
                        <svg class="home_blob" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M47.1,-72.7C59.7,-65.1,67.8,-49.9,70,-34.9C72.3,-19.9,68.8,-5.3,63.5,6.8C58.1,18.9,51,28.5,43.1,37.1C35.3,45.8,26.7,53.7,16.7,56.4C6.7,59.1,-4.6,56.7,-14.9,52.7C-25.1,48.8,-34.3,43.3,-43.8,35.9C-53.2,28.6,-62.9,19.5,-67.2,8C-71.5,-3.6,-70.5,-17.7,-67,-32.9C-63.6,-48,-57.7,-64.3,-46.1,-72.3C-34.5,-80.4,-17.3,-80.1,0,-80C17.2,-80,34.5,-80.2,47.1,-72.7Z" transform="translate(100 100)" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M47.1,-72.7C59.7,-65.1,67.8,-49.9,70,-34.9C72.3,-19.9,68.8,-5.3,63.5,6.8C58.1,18.9,51,28.5,43.1,37.1C35.3,45.8,26.7,53.7,16.7,56.4C6.7,59.1,-4.6,56.7,-14.9,52.7C-25.1,48.8,-34.3,43.3,-43.8,35.9C-53.2,28.6,-62.9,19.5,-67.2,8C-71.5,-3.6,-70.5,-17.7,-67,-32.9C-63.6,-48,-57.7,-64.3,-46.1,-72.3C-34.5,-80.4,-17.3,-80.1,0,-80C17.2,-80,34.5,-80.2,47.1,-72.7Z" transform="translate(100 100)" />
                                <image class="home_blob-img" x='0' y='27' xlink:href="assets/img/apip1.png" />
                            </g>
                        </svg>
                    </div>
                    <div class="col-12 col-lg-5 col-xl-6 home_text animate-right">
                        <h1 class="home_name">Afif Defriant</h1>
                        <h3 class="home_subname">Coding Enthusiast</h3>
                        <p class="home_description">
                            Someone who's interested in the world of technology especially in programing.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section about" id="about">
            <div class="animate-bottom" id="about-title">
                <h2 class="section_title">About Me</h2>
                <span class="section_subtitle">My introduction</span>
            </div>

            <div class="row about_container">
                <div class="col-12 col-lg-5 offset-lg-1 about_img animate-left" id="about-img">
                    <img src="assets/img/apip3.jpg">
                </div>
                <div class="col-12 col-lg-5 animate-right" id="about-description">
                    <div class="row">
                        <div class="col-12 about_description">
                            Hello.. my name is Afif Defriant, i am <?= $age ?> years old. I am a software engineer in field of
                            web development with <?= $webDevExperience ?> experience.
                        </div>
                        <div class="col-12 about_description">
                            I mastered several programing languages such as HTML, CSS, and JavaScript to build user
                            interface and user experience of web application and PHP with Laravel framework to create server side function and logic of web application,
                            as well as MySql for the database.
                        </div>
                    </div>
                </div>
            </div>

            <div class="personal_journey animate-bottom" id="personal-journey">
                <span class="section_subtitle">My personal journey</span>

                <div class="journey_tabs">
                    <div class="journey_button journey_active" data-target="#education">
                        <i class="far fa-graduation-cap journey_icon"></i>Education
                    </div>
                    <div class="journey_button" data-target="#work">
                        <i class="far fa-briefcase journey_icon"></i>Work
                    </div>
                </div>

                <div class="journey_content journey_active" id="education">
                    <div class="row">
                        <div class="col-5 col-md-4 offset-md-1 journey_left">
                            <h3 class="journey_title">SDN Harapan Baru V</h3>

                            <div class="journey_calendar">
                                <i class="far fa-calendar-alt"></i>2005 - 2011
                            </div>
                        </div>

                        <div class="col-1 col-md-1 journey_lines">
                            <span class="journey_rounder"></span>
                            <span class="journey_line"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-md-4 offset-md-1 journey_left">

                        </div>

                        <div class="col-1 col-md-1 journey_lines">
                            <span class="journey_rounder"></span>
                            <span class="journey_line"></span>
                        </div>

                        <div class="col-5 col-md-4 journey_right">
                            <h3 class="journey_title">SMPT Widya Duta</h3>

                            <div class="journey_calendar">
                                <i class="far fa-calendar-alt"></i>2011 - 2014
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-md-4 offset-md-1 journey_left">
                            <h3 class="journey_title">SMK Panjatek</h3>
                            <span class="journey_subtitle">Major of Computer and Network Engineering</span>
                            <div class="journey_calendar">
                                <i class="far fa-calendar-alt"></i>2014 - 2017
                            </div>
                        </div>

                        <div class="col-1 col-md-1 journey_lines">
                            <span class="journey_rounder"></span>
                            <span class="journey_line"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-md-4 offset-md-1 journey_left">

                        </div>

                        <div class="col-1 col-md-1 journey_lines">
                            <span class="journey_rounder"></span>
                        </div>

                        <div class="col-5 col-md-4 journey_right">
                            <h3 class="journey_title">Universitas Bhayangkara Jakarta Raya</h3>
                            <span class="journey_subtitle">Bachelor Degree of Computer Science</span>
                            <div class="journey_calendar">
                                <i class="far fa-calendar-alt"></i>2017 - 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="journey_content" id="work">
                    <div class="row">
                        <div class="col-5 col-md-4 offset-md-1 journey_left">
                            <h3 class="journey_title">PT PLN (Persero)</h3>
                            <span class="journey_subtitle">Field Practice</span>
                            <div class="journey_calendar">
                                <i class="far fa-calendar-alt"></i>2017
                            </div>
                        </div>

                        <div class="col-1 col-md-1 journey_lines">
                            <span class="journey_rounder"></span>
                            <span class="journey_line"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 col-md-4 offset-md-1 journey_left">

                        </div>

                        <div class="col-1 col-md-1 journey_lines">
                            <span class="journey_rounder"></span>
                        </div>

                        <div class="col-5 col-md-4 journey_right">
                            <h3 class="journey_title">Pusat Pengelolaan Komplek Gelora Bung Karno</h3>
                            <span class="journey_subtitle">Internship</span>
                            <div class="journey_calendar">
                                <i class="far fa-calendar-alt"></i>2020
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cv animate-bottom" id="download-cv">
                <a href="download-cv.php" class="button">
                    Download CV <i class="far fa-download btn_icon_right"></i>
                </a>
            </div>
        </section>

        <section class="section" id="skills">
            <div class="animate-bottom" id="skills-title">
                <h2 class="section_title">Skills</h2>
                <span class="section_subtitle">My technical level</span>
            </div>

            <div class="row skills_container">
                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 skills_content animate-bottom" id="skills-content-1">
                    <div class="skills_header">
                        <div class="skills_icon">
                            <i class="fad fa-code"></i>
                        </div>
                        <h3 class="skills_title">Programing Language</h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data programing-language animate-bottom">
                            <img src="assets/img/html-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">HTML</h3>
                                <span class="skills_experience"><?= $htmlExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span>Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data programing-language animate-bottom">
                            <img src="assets/img/css-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">CSS</h3>
                                <span class="skills_experience"><?= $cssExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> <span>Advanced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data programing-language animate-bottom">
                            <img src="assets/img/javascript-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">JavaScript</h3>
                                <span class="skills_experience"><?= $javaScriptExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> <span>Advanced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data programing-language animate-bottom">
                            <img src="assets/img/php-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">PHP</h3>
                                <span class="skills_experience"><?= $phpExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span>Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data programing-language animate-bottom">
                            <img src="assets/img/mysql-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">MySQL</h3>
                                <span class="skills_experience"><?= $mySqlExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span>Expert</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 skills_content animate-bottom" id="skills-content-2">
                    <div class="skills_header">
                        <div class="skills_icon">
                            <i class="fad fa-cog"></i>
                        </div>
                        <h3 class="skills_title">Framework / System</h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data framework-system animate-bottom">
                            <img src="assets/img/laravel-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">Laravel</h3>
                                <span class="skills_experience"><?= $laravelExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span>Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data framework-system animate-bottom">
                            <img src="assets/img/jquery-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">jQuery</h3>
                                <span class="skills_experience"><?= $jqueryExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> <span>Advanced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data framework-system animate-bottom">
                            <img src="assets/img/api-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">REST API</h3>
                                <span class="skills_experience"><?= $apiExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span>Intermediate</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data framework-system animate-bottom">
                            <img src="assets/img/bootstrap-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">Bootstrap</h3>
                                <span class="skills_experience"><?= $bootstrapExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> <span>Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-4 skills_data framework-system animate-bottom">
                            <img src="assets/img/materializecss-logo.png" class="skills_data-img">
                            <div class="skills_data-content">
                                <h3 class="skills_name">Materialize CSS</h3>
                                <span class="skills_experience"><?= $materializeCssExperience ?></span>
                                <br>
                                <div class="skills_rate">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> <span>Advanced</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section services" id="services">
            <div class="animate-bottom" id="services-title">
                <h2 class="section_title">Services</h2>
                <span class="section_subtitle">What i offer</span>
            </div>

            <div class="row services_container">
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1 col-xxl-4 offset-xxl-2 animate-left" id="services1">
                    <div class="services_content">
                        <i class="fad fa-browser services_icon"></i>
                        <h3 class="services_title">Front-End Developer</h3>
                        <span class="services_subtitle">Client side coding</span>

                        <ul class="services_data">
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Creating UI/UX elements</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Responsive web page</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Develop new user-facing features</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>REST API Consumption</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Collaborate with Back-End Developer</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xxl-4 animate-right" id="services2">
                    <div class="services_content">
                        <i class="fad fa-database services_icon"></i>
                        <h3 class="services_title">Back-End Developer</h3>
                        <span class="services_subtitle">Server side coding</span>

                        <ul class="services_data">
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Designing function and logic flow</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Creating reusable and clean code</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Testing and Debugging</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Building REST API Server</p>
                            </li>
                            <li class="services_list">
                                <i class="far fa-check-circle services_data-icon"></i>
                                <p>Collaborate with Front-End Developer</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="portfolio">
            <div class="animate-bottom" id="portfolio-title">
                <h2 class="section_title">Portfolio</h2>
                <span class="section_subtitle">Most recent work</span>
            </div>

            <div class="portfolio_container swiper-container animate-bottom" id="portfolio-content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row portfolio-row">
                            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 col-xxl-4 offset-xxl-2 portfolio_img">
                                <img src="assets/img/ecommerce.png">
                            </div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_data">
                                <h3 class="portfolio_title">E-Commerce</h3>
                                <p class="portfolio_description">An online shop site with a custom order feature where
                                    customers can customize the desired product.
                                    <br>
                                    Accompanied by real time notification feature.
                                </p>
                            </div>
                        </div>
                        <div class="row portfolio-row flex-row-reverse">
                            <div class="col-lg-1 col-xxl-2"></div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_img">
                                <img src="assets/img/ecommerce2.png">
                            </div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_data">
                                <h3 class="portfolio_title tech">Technology used</h3>
                                <div class="row">
                                    <div class="col-6 tech_content">
                                        <div class="tech_title">
                                            <i class="fad fa-browser tech_icon"></i> Front-End
                                        </div>
                                        <ul class="tech_data">
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>HTML</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>CSS</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Java Script</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>jQuery</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Bootstrap</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-6 tech_content">
                                        <div class="tech_title">
                                            <i class="fad fa-database tech_icon"></i> Back-End
                                        </div>
                                        <ul class="tech_data">
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>PHP</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Laravel</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>MySQL</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Pusher</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row portfolio-row">
                            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 col-xxl-4 offset-xxl-2 portfolio_img">
                                <img src="assets/img/crm.png">
                            </div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_data">
                                <h3 class="portfolio_title">E-CRM</h3>
                                <p class="portfolio_description">Electronic Customer Relationship Management System
                                    equipped with customer registration and customer complaints features, and also
                                    accompanied by real time notification.</p>
                            </div>
                        </div>
                        <div class="row portfolio-row flex-row-reverse">
                            <div class="col-lg-1 col-xxl-2"></div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_img">
                                <img src="assets/img/crm2.png">
                            </div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_data">
                                <h3 class="portfolio_title tech">Technology used</h3>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="tech_title">
                                            <i class="fad fa-browser tech_icon"></i> Front-End
                                        </div>
                                        <ul class="tech_data">
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>HTML</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>CSS</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Java Script</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>jQuery</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Materialize CSS</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-6">
                                        <div class="tech_title">
                                            <i class="fad fa-database tech_icon"></i> Back-End
                                        </div>
                                        <ul class="tech_data">
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>PHP</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Laravel</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>MySQL</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Pusher</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row portfolio-row">
                            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 col-xxl-4 offset-xxl-2 portfolio_img">
                                <img src="assets/img/ebooking.png">
                            </div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_data">
                                <h3 class="portfolio_title">Booking Room System</h3>
                                <p class="portfolio_description">An online meeting room reservation website with
                                    scheduling feature.</p>
                            </div>
                        </div>
                        <div class="row portfolio-row flex-row-reverse">
                            <div class="col-lg-1 col-xxl-2"></div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_img">
                                <img src="assets/img/ebooking2.png">
                            </div>

                            <div class="col-12 col-md-6 col-lg-5 col-xxl-4 portfolio_data">
                                <h3 class="portfolio_title tech">Technology used</h3>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="tech_title">
                                            <i class="fad fa-browser tech_icon"></i> Front-End
                                        </div>
                                        <ul class="tech_data">
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>HTML</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>CSS</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Java Script</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>jQuery</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Bootstrap</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-6">
                                        <div class="tech_title">
                                            <i class="fad fa-database tech_icon"></i> Back-End
                                        </div>
                                        <ul class="tech_data">
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>PHP</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>Laravel</p>
                                            </li>
                                            <li class="tech_list">
                                                <i class="far fa-check-circle tech_list-icon"></i>
                                                <p>MySQL</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next">
                    <i class="fas fa-chevron-right swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fas fa-chevron-left swiper-portfolio-icon"></i>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="section contact" id="contact">
            <div class="animate-bottom" id="contact-title">
                <h2 class="section_title">Contact Me</h2>
                <span class="section_subtitle">Get in touch</span>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 contact_informations animate-left" id="contact1">
                    <div class="contact_information">
                        <i class="far fa-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Phone</h3>
                            <span class="contact_subtitle">+62 813 1495 7058 &nbsp; (Whatsapp Available)</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="far fa-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">defriant17@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact_information">
                        <i class="far fa-map-marker-alt contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">Indonesia, West Java, Bekasi City</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 animate-right" id="contact2">
                    <div class="direct-message">
                        <hr>
                        <span>DIRECT MESSAGE</span>
                        <hr>
                    </div>
                    <form id="form-contact">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="input_group">
                                    <label for="" class="input_label">Name</label>
                                    <input type="text" name="name" id="" class="input" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="input_group">
                                    <label for="" class="input_label">Email</label>
                                    <input type="email" name="email" id="" class="input" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12 input_form">
                                <div class="input_group">
                                    <label for="" class="input_label">Phone</label>
                                    <input type="number" name="phone" id="" class="input" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input_group">
                                    <label for="" class="input_label">Subject</label>
                                    <input type="text" name="subject" id="" class="input" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input_group">
                                    <label for="" class="input_label">Message</label>
                                    <textarea name="message" id="" class="input"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="btn-send" type="button" class="button">
                                    Send <i class="far fa-paper-plane btn_icon_right"></i>
                                </button>
                                <div class="send-status">
                                    <img src="assets/img/bot.png" class="bot-chat">
                                    <div class="talk-bubble">
                                        <i class="fas fa-times send-status-close"></i>
                                        <div class="talktext">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 footer_titles">
                    <h1 class="footer_title">Afif Defriant</h1>
                    <span class="footer_subtitle">Web Developer</span>
                </div>
                <div class="col-12 col-md-6 col-lg-4 footer_links">
                    <div class="row">
                        <div class="col-12 col-xl-3 footer_link">
                            <a href="#skills">Skills</a>
                        </div>
                        <div class="col-12 col-xl-3 footer_link">
                            <a href="#services">Services</a>
                        </div>
                        <div class="col-12 col-xl-3 footer_link">
                            <a href="#portfolio">Portfolio</a>
                        </div>
                        <div class="col-12 col-xl-3 footer_link">
                            <a href="#contact">Contact</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 footer_socials">
                    <a href="https://www.instagram.com/defriiant/" target="_blank" class="footer_social">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/defriant17/" target="_blank" class="footer_social">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/afif-defriant-a3214421b/" target="_blank" class="footer_social">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/defriant" target="_blank" class="footer_social">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
        <p class="footer_copy">&#169; <?= date('Y') ?> Afif Defriant.</p>
    </footer>

    <a href="#" class="scrollup" id="scroll-up">
        <i class="fas fa-arrow-up scrollup_icon"></i>
    </a>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js?v=<?= filemtime('assets/js/main.js') ?>"></script>
    <script src="assets/js/contact.js?v=<?= filemtime('assets/js/contact.js') ?>"></script>
</body>

</html>