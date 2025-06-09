<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Informasi Kursus : Project Akhir Web Programming 1</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link rel="icon" href="assets/img/logo.svg" type="image/x-icon">
</head>
<body>
    <header class="header header-layout">
        <div class="header-menu">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto col-xl align-self-stretch">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo.svg" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li> <a href="about.html">Home</a> </li>
                                <li> <a href="#about">About Us</a> </li>
                                <li class="menu-item-has-children">
                                    <a href="course.html">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="course.html">Courses 1</a></li>
                                        <li><a href="courses-2.html">Courses 2</a></li>
                                        <li><a href="course-details.html">Course Details 1</a></li>
                                        <li><a href="course-details-2.html">Course Details 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog.html">Tutor</a>
                                    <ul class="sub-menu">
                                        <li><a href="team.html">Our Tutors</a></li>
                                        <li><a href="team-details.html">Tutor Details</a></li>
                                        <li><a href="become-tutor.html">Become Tutor</a></li>
                                        <li><a href="find-tutor.html">Find Tutor</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </nav>
                        <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-btns">
                            <button type="button" class="searchBoxTggler"><i class="bi bi-search"></i></button>
                            <a href="find-program.html" class="f-btn find"><i class="bi bi-mortarboard"></i> Find Program</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="mobileMenuLabel">
                <img src="assets/img/logo.svg" alt="logo" style="max-height: 40px;">
            </h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
            <li><a href="about.html" class="nav-link">Home</a></li>
            <li><a href="#about" class="nav-link">About Us</a></li>
            <li>
                <a class="nav-link" data-bs-toggle="collapse" href="#coursesSub" role="button" aria-expanded="false" aria-controls="coursesSub">
                Courses <i class="bi bi-plus"></i>
                </a>
                <div class="collapse" id="coursesSub">
                    <ul class="list-unstyled ms-3">
                        <li><a href="course.html" class="nav-link">Courses 1</a></li>
                        <li><a href="courses-2.html" class="nav-link">Courses 2</a></li>
                        <li><a href="course-details.html" class="nav-link">Course Details 1</a></li>
                        <li><a href="course-details-2.html" class="nav-link">Course Details 2</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="nav-link" data-bs-toggle="collapse" href="#tutorSub" role="button" aria-expanded="false" aria-controls="tutorSub">
                Tutor <i class="bi bi-plus"></i>
                </a>
                <div class="collapse" id="tutorSub">
                <ul class="list-unstyled ms-3">
                    <li><a href="team.html" class="nav-link">Our Tutors</a></li>
                    <li><a href="team-details.html" class="nav-link">Tutor Details</a></li>
                    <li><a href="become-tutor.html" class="nav-link">Become Tutor</a></li>
                    <li><a href="find-tutor.html" class="nav-link">Find Tutor</a></li>
                </ul>
                </div>
            </li>
            <li><a href="contact.html" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>

    <section class="hero-layout" data-fade="true" data-dots="true">
        <div>
            <div class="hero-inner">
                <div class="hero-bg" style="background-image: url('assets/img/9760493.jpg');"></div>
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">Kursus Pintar untuk Semua</h1>
                        <p class="hero-text">Gabung sekarang dan mulai perjalanan belajarmu bersama kami.</p>
                        <div class="hero-btns">
                            <a href="find-program.html" class="f-btn"><i class="bi bi-mortarboard"></i> Lihat Kursus</a>
                        </div>
                    </div>
                </div>
                <div class="course-style3">
                    <div class="course-img">
                        <a href="course-details.html"><img src="assets/img/course/4860250.jpg" alt="course"></a>
                    </div>
                    <div class="course-content">
                        <div class="course-review">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i> (5.0)
                        </div>
                        <h3 class="course-name"><a href="course-details.html"> Web Development</a></h3>
                        <span class="course-teacher">John Doe</span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="hero-inner">
                <div class="hero-bg" style="background-image: url('assets/img/blue-surface-with-study-tools.jpg');"></div>
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="hero-content ">
                        <h1 class="hero-title">Belajar Dari Tutor Berpengalaman</h1>
                        <p class="hero-text">Gabung sekarang dan mulai perjalanan belajarmu bersama kami.</p>
                        <div class="hero-btns">
                            <a href="find-program.html" class="f-btn"><i class="bi bi-mortarboard"></i> Lihat Kursus</a>
                        </div>
                    </div>
                </div>
                <div class="course-style3">
                    <div class="course-img">
                        <a href="course-details.html"><img src="assets/img/course/4412009.jpg" alt="course"></a>
                    </div>
                    <div class="course-content">
                        <div class="course-review">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i> (5.0)
                        </div>
                        <h3 class="course-name"><a href="course-details.html">Java Develpment</a></h3>
                        <span class="course-teacher">Alice</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-bottom">
        <div class="container">
            <div class="row align-items-center align-items-xxl-start">
                <div class="col-lg-5">
                    <div class="picture-box">
                        <div class="picture-1 mega-hover"><img src="assets/img/about/3974104.jpg" alt="About Img"></div>
                        <div class="picture-2 mega-hover"><img src="assets/img/about/6491439.jpg" alt="About Img"></div>
                        <div class="picture-3 mega-hover"><img src="assets/img/about/5144778.jpg" alt="About Img"></div>
                        <div class="vs-circle"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-box">
                        <div class="title-area">
                            <span class="sec-subtitle">WELCOME TO GLOBAL EDUCATION</span>
                            <h2 class="about-title h1">Take Your Learning Organization to The Next Level.</h2>
                        </div>
                        <div class="about-content">
                            <p class="fs-md">Kami adalah platform kursus daring dan luring yang hadir untuk menyediakan pendidikan berkualitas kepada siapa pun, di mana pun. Terinspirasi oleh Tujuan Pembangunan Berkelanjutan nomor 4, kami percaya bahwa setiap orang berhak untuk belajar dan berkembang.</p>

                            <div class="call-media">
                                <div class="media-icon"><i class="bi bi-telephone"></i></div>
                                <div class="media-body">
                                    <span class="media-label">Call Anytime 24/7</span>
                                    <p class="media-info"><a href="tel:+26921562148" class="text-decoration-none">+269 2156 2148</a></p>
                                </div>
                            </div>

                            <div class="hero-btns">
                                <a href="about.html" class="f-btn info"><i class="bi bi-mortarboard"></i> Get More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="background-image: url('assets/img/course-bg-pattern.jpg'); background-size: cover; background-position: center;">
        <section class="space-bottom space-top">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sec-subtitle">KATEGORI KURSUS</span>
                    <h2 class="sec-title">Topics by Category</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="category-style">
                            <div class="category-img">
                                <img class="w-100" src="assets/img/course/269257865_11240811.jpg" alt="category">
                                <div class="icon">
                                    <span class="bi bi-people"></span>
                                </div>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title"><a href="course.html">Software Development</a></h5>
                                <span class="subtitle">over 600 courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="category-style">
                            <div class="category-img">
                                <img class="w-100" src="assets/img/course/Designer life-bro.png" alt="">
                                <div class="icon">
                                    <span class="bi bi-globe"></span>
                                </div>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title"><a href="course.html">Desain Grafis</a></h5>
                                <span class="subtitle">over 450 courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="category-style">
                            <div class="category-img">
                                <img class="w-100" src="assets/img/course/Designer life-pana.png" alt="category">
                                <div class="icon">
                                    <span class="bi bi-android"></span>
                                </div>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title"><a href="course.html">Technology</a></h5>
                                <span class="subtitle">over 336 courses</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="category-style">
                            <div class="category-img">
                                <img class="w-100" src="assets/img/course/Blog post-bro.png" alt="category">
                                <div class="icon">
                                    <span class="bi bi-brilliance"></span>
                                </div>
                            </div>
                            <div class="category-content">
                                <h5 class="category-title"><a href="course.html">Backend Developer</a></h5>
                                <span class="subtitle">over 778 courses</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="space-bottom ">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sec-subtitle">WELCOME TO GLOBAL EDUCATION</span>
                    <h2 class="sec-title">Explore Courses</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-6 col-xl-4">
                        <div class="course-style">
                            <div class="course-img">
                                <a href="course-details.html"><img src="assets/img/about-2-1.jpg" alt="Course Img"></a>
                                <span class="course-price">$778</span>
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">Advance Begineer's Goal & Managing Course</a></h3>
                                <div class="course-meta">
                                    <span><i class="bi bi-person-fill"></i>775 Students</span>
                                    <a href="course-details.html"><i class="bi bi-tv"></i>45 Leson</a>
                                    <span><i class="bi bi-clock"></i>78h 15m</span>
                                </div>
                                <div class="course-footer">
                                    <div class="course-teacher"><a href="team-details.html" class="text-inherit"><img src="assets/img/about-2-1.jpg" alt="Course">Rose Marry</a></div>
                                    <div class="course-review"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="course-style">
                            <div class="course-img">
                                <a href="course-details.html"><img class="w-100" src="assets/img/about-2-1.jpg" alt="Course Img"></a>
                                <span class="course-price">$963</span>
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">Advance Technology & Architecture Course</a></h3>
                                <div class="course-meta">
                                    <span><i class="bi bi-person-fill"></i>779 Students</span>
                                    <a href="course-details.html"><i class="bi bi-tv"></i>79 Leson</a>
                                    <span><i class="bi bi-clock"></i>6h 36m</span>
                                </div>
                                <div class="course-footer">
                                    <div class="course-teacher"><a href="team-details.html" class="text-inherit"><img src="assets/img/about-2-1.jpg" alt="Course">Jerzzy Lamot</a></div>
                                    <div class="course-review"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="course-style">
                            <div class="course-img">
                                <a href="course-details.html"><img class="w-100" src="assets/img/about-2-1.jpg" alt="Course Img"></a>
                                <span class="course-price">$445</span>
                            </div>
                            <div class="course-content">
                                <h3 class="h5 course-name"><a href="course-details.html" class="text-inherit">Basic Chemistry Programs arranged on Lab</a></h3>
                                <div class="course-meta">
                                    <span><i class="bi bi-person-fill"></i>75 Students</span>
                                    <a href="course-details.html"><i class="bi bi-tv"></i>78 Leson</a>
                                    <span><i class="bi bi-clock"></i>17h 11m</span>
                                </div>
                                <div class="course-footer">
                                    <div class="course-teacher"><a href="team-details.html" class="text-inherit"><img src="assets/img/about-2-1.jpg" alt="Course">Rodja Hartmann</a></div>
                                    <div class="course-review"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="space-top space-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 text-center text-xl-start">
                    <div class="title-area">
                        <span class="sec-subtitle">TRAINING AND LEADERSHIP PROGRAMME</span>
                        <h2 class="sec-title h1">Training Programme</h2>
                    </div>
                    <div class="row gx-80 gy-xl-4 mb-4 mb-xl-0">
                        <div class="col-md-6 col-xl-6">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-1.svg" alt=""></div>
                                <h5 class="media-title">Interactive Lessons</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-2.svg" alt=""></div>
                                <h5 class="media-title">Free First Lesson</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-3.svg" alt=""></div>
                                <h5 class="media-title">Trained & Experienced</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-6">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-4.svg" alt=""></div>
                                <h5 class="media-title">Question, Quiz & Course</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="position-relative">
                        <form action="apply.php" class="form-style" enctype="multipart/form-data" method="POST">
                            <div class="form-inner">
                                <h3 class="form-title h5">Join over <span class="text-theme">50,000 students</span> who’ve now registered for their courses. Don’t miss out.</h3>
                                <div class="row">
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <label for="img" class="custom-file-upload">
                                                <i class="bi bi-camera-fill"></i>
                                                <span>Silakan upload foto Anda</span>
                                            </label>
                                            <input type="file" name="img" id="img" class="form-file-hidden">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Complete Name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <select name="coursenames" id="coursenames">
                                                <option selected disabled hidden>Select Course</option>
                                                <option>Development</option>
                                                <option>Ui Development</option>
                                                <option>CMS Learning</option>
                                                <option>Jamstack Master</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="testimoni" id="testimoni" placeholder="Testimoni" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-12">
                                        <div class="form-group">
                                            <div id="rating" class="rating-stars">
                                                <input type="radio" name="rating" id="star5" value="5"><label for="star5">&#9733;</label>
                                                <input type="radio" name="rating" id="star4" value="4"><label for="star4">&#9733;</label>
                                                <input type="radio" name="rating" id="star3" value="3"><label for="star3">&#9733;</label>
                                                <input type="radio" name="rating" id="star2" value="2"><label for="star2">&#9733;</label>
                                                <input type="radio" name="rating" id="star1" value="1"><label for="star1">&#9733;</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button type="submit" class="f-btn">Apply Today</button>
                                        <a class="form-link" href="about.html">Frequently Asked Questions</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vs-circle color2"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="testimoni-section" class="testimoni-section overflow-hidden space-bottom p-5">
        <div class="container">
          <div class="title-area text-center">
            <span class="sec-subtitle">WHAT PEOPLE SAY</span>
            <h2 class="sec-title h1">Our Students Words</h2>
          </div>
      
          <!-- Ini adalah container untuk slick -->

          <div class="slider-testimoni mt-5">

          <?php 
          include 'testimoni.php';
          ?>

            <div class="testi-style1">
              <div class="testi-content">
                <p class="testi-text">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit nisi sed sollicitudin pellentesque. Nunc posuere purus rhoncus pulvinar ”</p>
              </div>
              <div class="testi-client">
                <img src="assets/img/testimonial-2-1.png" alt="author">
                <h3 class="testi-name h5">Jessica Moniqa</h3>
                <span class="testi-degi">B.Tech-Civil , 2017-2022</span>
                <div class="testi-rating">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <footer class="footer-wrapper footer-layout  " style="background-image: url('assets/img/footer-bg-2-1.jpg'); background-size: cover; background-position: center;">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="vs-widget-about">
                                <div class="footer-logo"> <a href="index.html"><img src="assets/img/logo-white.svg" alt="logo"></a> </div>
                                <p class="footer-text">Lorem ipsum dolor sit amet, conse ctet rem ipsdolor sit amet. sum do lor sit amet, consectet edolor sit amet, comod.</p>
                                <div class="footer-media">
                                    <div class="media-icon"><i class="bi bi-file-pdf-fill"></i></div>
                                    <div class="media-body">
                                        <span class="media-title">Universty Prospects</span>
                                        <a href="#">Download.pdf</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Find Campus</h3>
                            <div class="footer-campus">
                                <div class="campus-img mega-hover">
                                    <a href="#"><img class="w-100" src="assets/img/about-2-1.jpg" alt="Campus Image"></a>
                                </div>
                                <p class="campus-address"><i class="bi bi-geo-alt"></i>1309 Beacon Street, Suite 300, Brookline, MA, 02446</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget nav_menu footer-widget">
                            <h3 class="widget_title">Popular Subjects</h3>
                            <div class="menu-all-pages-container footer-menu">
                                <ul class="menu">
                                    <li><a href="course.html">Business and Management</a></li>
                                    <li><a href="course.html">Healthcare and Medicine</a></li>
                                    <li><a href="course.html">Teaching</a></li>
                                    <li><a href="course.html">Psychology and Mental Health</a></li>
                                    <li><a href="course.html">IT and Computer Science</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="contact-style">
                                <h4 class="contact-title">Looking to study with us?</h4>
                                <p class="contact-text">Speak to an adviser</p>
                                <a href="tel:+00123456789" class="contact-number h5"><i class="bi bi-telephone"></i> (44) 123 456 789</a>
                                <a href="tel:+88123555787" class="contact-number h5"><i class="bi bi-telephone"></i> (88) 123 555 787</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="text-center col-lg-auto">
                        <p class="copyright-text">Copyright <i class="bi bi-c-circle"></i> 2023 <a href="index.html">Educino</a>. All Rights Reserved By <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a></p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="social-style">
                            <a href="#"><i class="bi bi-facebook"></i>Facebook</a>
                            <a href="#"><i class="bi bi-twitter"></i>Twitter</a>
                            <a href="#"><i class="bi bi-linkedin"></i>Linked In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="scrollToTop"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>