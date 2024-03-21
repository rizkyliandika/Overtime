<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mayapada Tower</title>

    <!-- FAVICON LINK -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('icons/manifest.json') }}">

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="/" class="navbar-brand mx-auto mx-lg-0">
                <!-- <i class="bi-bullseye brand-logo"></i> -->
                <img src="images/logo.png" alt="logo"
                    style="width: 50px; height: 30px; text-align: center; margin-bottom: 0px; margin-top: 5px;">
                <span class="brand-text">Mayapada <br> Tower</span>
            </a>

            <a class="nav-link click-scroll custom-btn nav-btn btn d-lg-none" href="#contact">Get in Touch</a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#team">Teams</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#unit">Available Units</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#venue">Venue</a>
                    </li>

                    <!-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#contact">Contact</a>
                        </li> -->

                    <li class="nav-item">
                        <a class="nav-link click-scroll custom-btn nav-btn btn d-none d-lg-block" href="#contact">Get
                            in Touch</a>
                    </li>
                </ul>
                <div>

                </div>
    </nav>

    <main>

        <section class="hero" id="home">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="hero-text">

                            <h1 class="text-white mb-4"><u class="text-info">Getting ready</u> for your business
                                office spaces in the city center ? </h1>

                            <!-- <div class="text-description">
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio iusto at fuga quis distinctio soluta nisi, eum in tempore laboriosam cum a non autem obcaecati et? Iusto a quis dignissimos fuga iste. Eum corrupti saepe asperiores labore aliquam adipisci excepturi sint ex voluptatum repudiandae tempora, iusto in odio incidunt</p>
                                </div> -->

                            <!-- <a href="#section_4" class="custom-link bi-arrow-down arrow-icon"></a> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted class="custom-video" poster="">
                    <source src="videos/Video Of Sea Of Clouds During Sunrise.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
        </section>


        <section class="highlight">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="highlight-thumb">
                            <img src="images/highlight/front_mt.jpg" class="highlight-image img-fluid"
                                alt="">

                            <!-- <div class="highlight-info">
                                    <h3 class="highlight-title">Great Tower</h3>

                                    <a href="https://www.youtube.com/" class="bi-youtube highlight-icon"></a>
                                </div> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="highlight-thumb">
                            <img src="images/highlight/bottom_mt.jpg" class="highlight-image img-fluid"
                                alt="">

                            <!-- <div class="highlight-info">
                                    <h3 class="highlight-title">Great Tower</h3>

                                    <a href="https://www.youtube.com/" class="bi-youtube highlight-icon"></a>
                                </div> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="highlight-thumb">
                            <img src="images/highlight/sign_board.jpg" class="highlight-image img-fluid"
                                alt="">

                            <!-- <div class="highlight-info">
                                    <h3 class="highlight-title">Great Tenants</h3>

                                    <a href="https://www.youtube.com/" class="bi-youtube highlight-icon"></a>
                                </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="about section-padding" id="about">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12">
                        <h2 class="mb-4">Our <u class="text-info">Story</u></h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <h3 class="mb-3">Profile and History</h3>

                        <p>Located in the heart of Jakarta's Golden Triangle Central Business District, Mayapada Tower
                            (formerly Wisma Bank Dharmala) was completed in 1992 as one of the pioneer high rise office
                            towers in Jakarta with a semi gross of 24,000 sqm rentable area.</p>
                        <p>In 2005, a new management decided to rename the building and undertook multimillion dollar
                            renovations to meet the standard of newer office towers in the area. Some of the renovations
                            that took place in the following years included: the now blue exterior façade with grand
                            canopies, modernized new design of public restrooms, an expansive lobby hall, and a cleaner
                            look from carpeted corridors to floor tiles.</p>

                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <h3>Vision</h3>
                        <p>To make Mayapada Tower a safe, clean, comfortable and luxurious office tower.</p>

                        <h3>Mision</h3>
                        <p>To provide a service that places importance in tenant satisfaction by recruiting and training
                            quality employees as primary assets and partners of the company.</p>

                        <div class="avatar-group border-top py-5 mt-3">
                            <img src="images/avatar/GT.jpg" class="img-fluid avatar-image" alt="">

                            <img src="images/avatar/41831.jpg" class="img-fluid avatar-image" alt="">
                            <img src="images/avatar/51365.jpg" class="img-fluid avatar-image avatar-image-left"
                                alt="">

                            <img src="images/avatar/56515.jpg" class="img-fluid avatar-image avatar-image-left"
                                alt="">

                            <img src="images/avatar/43322.jpg" class="img-fluid avatar-image avatar-image-left"
                                alt="">

                            <!-- <p class="d-inline">120+ People are attending with us</p> -->
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="teams section-padding" id="team">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                        <div class="teams-text-info">
                            <h2 class="mb-4">Our <u class="text-info">Teams</u></h2>

                            <p>“If you want to build a ship, don’t drum up people together to collect wood and don’t
                                assign them tasks and work, but rather teach them to long for the endless immensity of
                                the sea.” – Antoine de Saint-Exupéry, Writer</p>
                            <!-- <p>To provide a service that places importance in tenant satisfaction by recruiting and training quality employees as primary assets and partners of the company.</p> -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 ">
                        <div class="teams-thumb teams-thumb-medium teams-image-container">
                            <img src="images/avatar/GT.jpg" class="img-fluid teams-image" alt="">

                            <!-- <small class="teams-featured-text">Featured</small> -->

                            <div class="teams-info">

                                <h5 class="teams-title mb-0">Grace Tahir</h5>

                                <p class="teams-text mb-0">CHIEF EXECUTIVE OFFICER</p>

                                <!-- <ul class="social-icon">
                                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                        <li><a href="#" class="social-icon-link bi-google"></a></li>
                                    </ul> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="teams-thumb teams-thumb-small teams-image-container">
                                    <img src="images/avatar/41831.jpg" class="img-fluid teams-image" alt="">

                                    <div class="teams-info">
                                        <h5 class="teams-title mb-0">Yana Hardianaya</h5>

                                        <p class="teams-text mb-0">Marketing Senior Manager</p>

                                        <!-- <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                            </ul> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="teams-thumb teams-thumb-small teams-image-container">
                                    <img src="images/avatar/51365.jpg" class="img-fluid teams-image" alt="">

                                    <div class="teams-info">
                                        <h5 class="teams-title mb-0">Mahfud Fadlillah</h5>

                                        <p class="teams-text mb-0">Building Manager</p>

                                        <!-- <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="teams-thumb teams-thumb-small teams-image-container">
                                    <img src="images/avatar/56515.jpg" class="img-fluid teams-image" alt="">

                                    <div class="teams-info">
                                        <h5 class="teams-title mb-0">Sulastri</h5>

                                        <p class="teams-text mb-0">Finance and Accounting Manager</p>

                                        <!-- <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                            </ul> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="teams-thumb teams-thumb-small teams-image-container">
                                    <img src="images/avatar/43322.jpg" class="img-fluid teams-image" alt="">

                                    <div class="teams-info">
                                        <h5 class="teams-title mb-0">Dery Rezianta</h5>

                                        <p class="teams-text mb-0">INFORMATION TECHNOLOGY Manager</p>

                                        <!-- <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                            </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="schedule section-padding" id="services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-5">Services And <u class="text-info">Facilities</u></h2>

                        <nav>
                            <div class="nav nav-tabs align-items-baseline" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-DayOne-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-DayOne" type="button" role="tab"
                                    aria-controls="nav-DayOne" aria-selected="true">
                                    <h3>
                                        <span>Security</span>
                                        <small>Security Guard and CCTV 24 Hours</small>
                                    </h3>
                                </button>

                                <button class="nav-link" id="nav-DayTwo-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-DayTwo" type="button" role="tab"
                                    aria-controls="nav-DayTwo" aria-selected="false">
                                    <h3>
                                        <span>Internet</span>
                                        <small>Fiber Optic up to 10 Gbps 24 Hours</small>
                                    </h3>
                                </button>

                                <button class="nav-link" id="nav-DayThree-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-DayThree" type="button" role="tab"
                                    aria-controls="nav-DayThree" aria-selected="false">
                                    <h3>
                                        <span>Bank & ATM</span>
                                        <small>Office & More</small>
                                    </h3>
                                </button>

                                <button class="nav-link" id="nav-DayFour-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-DayFour" type="button" role="tab"
                                    aria-controls="nav-DayFour" aria-selected="false">
                                    <h3>
                                        <span>Food Corner</span>
                                        <small>Coffee Shop & More</small>
                                    </h3>
                                </button>
                            </div>
                        </nav>

                        <div class="tab-content mt-5" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-DayOne" role="tabpanel"
                                aria-labelledby="nav-DayOne-tab">
                                <div class="row border-bottom pb-5 mb-5">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/sec_1.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">

                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nihil, debitis
                                            neque, fuga nesciunt a, consectetur natus quod repellat dignissimos ipsum
                                            eius ipsam dolores iure in aliquam doloribus qui ut?</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/51365.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Madfud Fadlillah
                                                    <p class="teams-text mb-0">Building Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 3
                                                </span> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row border-bottom pb-5 mb-5">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/sec_3.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quis iusto
                                            molestiae aperiam non delectus voluptates ducimus aspernatur error iure
                                            asperiores ad iste eum aut, nulla reprehenderit quam quibusdam enim!</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/51365.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Madfud Fadlillah
                                                    <p class="teams-text mb-0">Building Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    10:00 - 10:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-D Room
                                                </span> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/sec_2.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat expedita,
                                            laborum, ipsum aliquid corrupti ipsam perspiciatis placeat fugit consectetur
                                            obcaecati laudantium impedit sint? Quidem eligendi atque aliquam nulla iure
                                            accusantium!</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/51365.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Madfud Fadlillah
                                                    <p class="teams-text mb-0">Building Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    11:00 - 11:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-B Room
                                                </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-DayTwo" role="tabpanel"
                                aria-labelledby="nav-DayTwo-tab">
                                <div class="row border-bottom pb-5 mb-5">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/conn_1.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">

                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui laboriosam ab
                                            est nihil velit a consequatur, accusamus accusantium tenetur? Assumenda
                                            nostrum distinctio consequuntur explicabo odit dicta perspiciatis, vero
                                            fugiat sunt?</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/43322.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Dery Rezianta
                                                    <p class="teams-text mb-0">Information Tech Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 2
                                                </span> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row border-bottom pb-5 mb-5">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/conn_3.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut est velit veniam
                                            explicabo doloremque! Recusandae cupiditate voluptatibus amet autem nostrum
                                            perspiciatis aut, eum itaque ratione officia eos ab fugit modi.</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/43322.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Dery Rezianta
                                                    <p class="teams-text mb-0">Information Tech Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    10:00 - 10:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-A Room
                                                </span> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/conn_2.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut est velit veniam
                                            explicabo doloremque! Recusandae cupiditate voluptatibus amet autem nostrum
                                            perspiciatis aut, eum itaque ratione officia eos ab fugit modi.</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/43322.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Dery Rezianta
                                                    <p class="teams-text mb-0">Information Tech Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    10:00 - 10:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-A Room
                                                </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-DayThree" role="tabpanel"
                                aria-labelledby="nav-DayThree-tab">
                                <div class="row border-bottom pb-5 mb-5">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/bank_1.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">

                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab harum eius
                                            accusamus officia voluptatibus, non unde quos velit autem nesciunt dolorum
                                            libero animi debitis iste laborum quae nemo laudantium quia.</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/41831.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Yana Hardianaya
                                                    <p class="teams-text mb-0">Marketing Senior Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 1
                                                </span> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/bank_2.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque nihil saepe
                                            facere ex mollitia aspernatur cumque explicabo delectus at, accusamus dolore
                                            suscipit, nostrum ea vero eaque sunt voluptas cum omnis?</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/41831.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Yana Hardianaya
                                                    <p class="teams-text mb-0">Marketing Senior Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    10:00 - 10:45 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-C Room
                                                </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-DayFour" role="tabpanel"
                                aria-labelledby="nav-DayFour-tab">
                                <div class="row border-bottom pb-5 mb-5">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/food_1.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur qui
                                            incidunt et ipsa dicta obcaecati expedita nostrum quam amet. Velit
                                            reiciendis esse exercitationem optio veniam, laborum maiores. At, expedita
                                            sequi!</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/41831.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Yana Hardianaya
                                                    <p class="teams-text mb-0">Marketing Senior Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span>
                                                    <i class="bi-clock me-2"></i>
                                                    8:00 - 9:00 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 2
                                                </span> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-12">
                                        <img src="images/schedule/food_2.jpg" class="schedule-image img-fluid"
                                            alt="">
                                    </div>

                                    <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                        <h4 class="mb-2">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur qui
                                            incidunt et ipsa dicta obcaecati expedita nostrum quam amet. Velit
                                            reiciendis esse exercitationem optio veniam, laborum maiores. At, expedita
                                            sequi!</p>

                                        <div class="d-flex align-items-center mt-4">
                                            <div class="avatar-group d-flex">
                                                <img src="images/avatar/41831.jpg" class="img-fluid avatar-image"
                                                    alt="">

                                                <div class="ms-3">
                                                    Yana Hardianaya
                                                    <p class="teams-text mb-0">Marketing Senior Manager</p>
                                                </div>
                                            </div>

                                            <!-- <span>
                                                    <i class="bi-clock me-2"></i>
                                                    8:00 - 9:00 AM
                                                </span>

                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 2
                                                </span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="call-to-action section-padding">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 col-12">
                        <h2 class="text-white mb-4">Become an <u class="text-info">our Tenant?</u></h2>

                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut dolore</p>
                    </div>

                    <div class="col-lg-3 col-12 ms-lg-auto mt-4 mt-lg-0">
                        <a href="#unit" class="custom-btn btn">Register Today</a>
                    </div>

                </div>
            </div>
        </section>

        <section class="pricing section-padding" id="unit">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                        <h2>Submit Your <u class="text-info">Plans</u></h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-5 mb-lg-0 pricing-ch-bg">
                        <div class="pricing-thumb bg-white shadow-lg">
                            <div class="pricing-title-wrap d-flex align-items-center text-center">

                                <h4 class="text-white mb-0 ">Low Zone</h4>

                                <!-- <h5 class="pricing-small-title text-white mb-0 ms-auto">$640</h5> -->
                            </div>

                            <div class="pricing-body">
                                <p>
                                    <i class="bi-arrows-expand me-2"></i> Floor 1 - 10
                                </p>

                                <p>
                                    <i class="bi-globe me-2"></i> High Speed Internet
                                </p>


                                <p>
                                    <i class="bi-shield-check me-2"></i> 24/7 Security
                                </p>

                                <div class="border-bottom pb-3 mb-4"></div>

                                <p class="pricing-description">The Low Zone comprises 1,741 sqm semi-gross area,
                                    divided into six different suites that range from 225 sqm to 360 sqm in size. Select
                                    the size and view that meets your requirements.</p>

                                <a class="custom-btn btn mt-3 pricing-btn" href="#contact">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-5 mb-lg-0">
                        <div class="pricing-thumb bg-white shadow-lg">
                            <div class="pricing-title-wrap d-flex align-items-center text-center">

                                <h4 class="pricing-title text-white mb-0">High Zone</h4>

                                <!-- <h5 class="pricing-small-title text-white mb-0 ms-auto">$840</h5> -->
                            </div>

                            <div class="pricing-body">
                                <p>
                                    <i class="bi-arrows-expand me-2"></i> Floor 11 - 20
                                </p>

                                <p>
                                    <i class="bi-globe me-2"></i> High Speed Internet
                                </p>

                                <p>
                                    <i class="bi-shield-check me-2"></i> 24/7 Security
                                </p>

                                <div class="border-bottom pb-3 mb-4"></div>

                                <p class="pricing-description">The High Zone comprises 1,840 sqm semi-gross area,
                                    divided into six office suites. Office suites range from 225 sqm to 398 sqm in size,
                                    each offering a different view.</p>

                                <a class="custom-btn btn mt-3 pricing-btn" href="#contact">Book Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="pricing-thumb bg-white shadow-lg">
                            <div class="pricing-title-wrap d-flex align-items-center text-center">

                                <h4 class="pricing-title text-white mb-0">Food Corner</h4>

                                <!-- <h5 class="pricing-small-title text-white mb-0 ms-auto">$1,240</h5> -->
                            </div>

                            <div class="pricing-body">
                                <p>
                                    <i class="bi-arrows-expand me-2"></i> Floor B1
                                </p>

                                <p>
                                    <i class="bi-shop me-2"></i> Open Spaces Area
                                </p>

                                <p>
                                    <i class="bi-shield-check me-2"></i> 24/7 Security
                                </p>

                                <div class="border-bottom pb-3 mb-4"></div>

                                <p class="pricing-description">Bringing you the ultimate culinary experience in
                                    Sudirman. Who have interest in a place that gives different perspective, an
                                    all-in-one pit stop to accomodate the society.</p>

                                <a class="custom-btn btn mt-3 pricing-btn" href="#contact">Book Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="venue section-padding" id="venue">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <h2 class="mb-5">Here's Our <u class="text-info">Venue</u></h2>
                    </div>

                    <div class="col-lg-6 col-12 ">
                        <iframe class="venue-thumb shadow-lg"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.289258185725!2d106.8200833!3d-6.2138079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f401bd149845%3A0xfab22c8daef828ee!2sMayapada%20Tower%2C%20Jl.%20Jenderal%20Sudirman%20No.Kav.28%2C%20RT.4%2FRW.2%2C%20Kuningan%2C%20Karet%2C%20Setiabudi%2C%20South%20Jakarta%20City%2C%20Jakarta%2012920!5e1!3m2!1sen!2sid!4v1656227117382!5m2!1sen!2sid"
                            width="100%" height="374px" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="venue-thumb bg-white shadow-lg">

                            <div class="venue-info-title">
                                <h2 class="mb-0 text-center">PT Precise Pasific Realty</h2>
                            </div>

                            <div class="venue-info-body">
                                <h5 class="d-flex">
                                    <i class="bi-geo-alt me-2"></i>
                                    <span>Mayapada Tower 1 , 5th Floor <br> Jl. Jenderal Sudirman No.Kav.28 <br> DKI
                                        Jakarta 12920 Indonesia</span>
                                </h5>

                                <h5 class="mt-4 mb-3">
                                    <a href="mailto:info@mayapadatower.com">
                                        <i class="bi-envelope me-2"></i>
                                        info[@]mayapadatower.com
                                    </a>
                                </h5>

                                <h5 class="mb-0">
                                    <a href="tel: +625212355">
                                        <i class="bi-telephone me-2"></i>
                                        021-5212355
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="contact section-padding" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <form id="myForm" class="custom-form contact-form bg-white shadow-lg" method="post"
                            action="mail.php" role="form">
                            <h2 class="text-center">Get In Touch With Us</h2>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Name" required="">
                                </div>

                                <div class="col-lg-4 col-md-4 col-12">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Email" required="">
                                </div>

                                <div class="cFol-lg-4 col-md-4 col-12">
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="Subject">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>

                                    <button type="submit" class="form-control">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                    <div class="d-flex">
                        <a href="#home" class="navbar-brand">
                            <span class="brand-text">Mayapada <br> Tower</span>
                        </a>

                        <ul class="social-icon ms-auto navbar-brand">
                            <li><a href="https://m.facebook.com/profile.php?id=175930202417718&refid=17&__tn__=C-R"
                                    class="social-icon-link bi-facebook" target="_blank"></a></li>

                            <li><a href="https://www.instagram.com/mayapadatower/" class="social-icon-link bi-instagram"
                                    target="_blank"></a></li>

                            <li><a href="https://wa.me/+6282168736120" class="social-icon-link bi-whatsapp"
                                    target="_blank"></a></li>

                            <li><a href="https://www.youtube.com/watch?v=ZoAYtqW_l7E"
                                    class="social-icon-link bi-youtube" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-12">
                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 col-12 ms-lg-auto">
                    <div class="copyright-text-wrap d-flex align-items-center">
                        <p class="copyright-text ms-lg-auto me-4 mb-0">© 2024 PT. Precise Pacific Realty.<br> Made with
                            <i class="fas bi-suit-heart-fill text-danger"></i>
                            From Technology Teams.
                        </p>
                        <a href="#home" class="bi-arrow-up arrow-icon"></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- JAVASCRIPT FILES -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.min.js.map') }}"></script> --}}
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>
</body>

</html>
