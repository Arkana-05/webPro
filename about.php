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
                            <a href="index.php"><img src="assets/img/logo.svg" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li> <a href="index.php">Home</a> </li>
                                <li> <a href="about.php">About Us</a> </li>
                                <li class="menu-item-has-children">
                                    <a href="course.html">Courses</a>
                                    <ul class="sub-menu">
                                        <li><a href="develop.html">Development</a></li>
                                        <li><a href="desain.html">Desain Grafis</a></li>
                                        <li><a href="tech.html">Technology</a></li>
                                        <li><a href="ai.html">AI</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="tutor.html">Tutor</a>
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
                            <a href="find-program.html" class="f-btn find"><i class="bi bi-mortarboard"></i> Find Course</a>
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
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="about.php" class="nav-link">About Us</a></li>
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

    <div class="breadcumb-wrapper "> 
        <div class="container z-index-common">
            <div class="overlay"></div>
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <p class="breadcumb-text">Search over 200 individual encyclopedias and reference books.</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                                <a href="about.php" class="f-btn info"><i class="bi bi-mortarboard"></i> Get More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-bottom" style="background-color: #f6f6f6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center text-xl-start">
                    <div class="title-area mb-5">
                        <span class="sec-subtitle">TRAINING AND LEADERSHIP PROGRAMME</span>
                        <h2 class="sec-title h1">Training Programme</h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-3">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-1.svg" alt=""></div>
                                <h5 class="media-title">Interactive Lessons</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-2.svg" alt=""></div>
                                <h5 class="media-title">Free First Lesson</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-3.svg" alt=""></div>
                                <h5 class="media-title">Trained & Experienced</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="media-style">
                                <div class="media-icon"><img src="assets/img/training-icon-1-4.svg" alt=""></div>
                                <h5 class="media-title">Question, Quiz & Course</h5>
                                <p>Ducamb welcomed every pain mstances owing to the claims of will frequently.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimoni-section overflow-hidden space-bottom p-5" style="background-color: #ffff;">
        <div class="container">
          <div class="title-area text-center">
            <span class="sec-subtitle">WHAT PEOPLE SAY</span>
            <h2 class="sec-title h1">Our Students Words</h2>
          </div>
      
          <!-- Ini adalah container untuk slick -->
          <div class="slider-testimoni mt-5">
            <?php
            include 'koneksi.php';

            $sql = "SELECT nama, img, course, testimoni, rating FROM user ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="testi-style1">';
                    echo '  <div class="testi-content">';
                    echo '    <p class="testi-text">“ ' . htmlspecialchars($row['testimoni']) . ' ”</p>';
                    echo '  </div>';
                    echo '  <div class="testi-client">';
                    if (!empty(trim($row['img']))) {
                        echo '<img src="assets/img/apply/' . htmlspecialchars($row['img']) . '" alt="Foto Pengguna">';
                    } else {
                        echo '<img src="assets/img/anon.jpeg" alt="Foto Pengguna">';
                    }

                    echo '    <h3 class="testi-name h5">' . htmlspecialchars($row['nama']) . '</h3>';
                    echo '    <span class="testi-degi">' . htmlspecialchars($row['course']). '</span>';
                    echo '    <div class="testi-rating">';
                    $rating = (int)$row['rating'];
                    for ($i = 1; $i <= 5; $i++) {
                        echo '<i class="bi bi-star' . ($i <= $rating ? '-fill' : '') . '"></i>';
                    }
                    echo '    </div>';
                    echo '  </div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Belum ada testimoni.</p>';
            }

            $conn->close();
            ?>
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
                                <div class="footer-logo"> <a href="index.php"><img src="assets/img/logo-white.svg" alt="logo"></a> </div>
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
                        <p class="copyright-text">Copyright <i class="bi bi-c-circle"></i> 2023 <a href="index.php">Educino</a>. All Rights Reserved By <a href="https://themeforest.net/user/vecuro_themes">Vecuro</a></p>
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