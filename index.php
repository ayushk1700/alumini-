
<?php
require('php/connection.inc.php');
require('php/function.inc.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>National Pg</title>



    <!-- Swiper CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.css'
        integrity='sha512-pJrGHWDVOeiy4UkMtHu0fpD8oLLssFcaW0fsVXUkA1/jDLopa554Z1AZo5SKtekHnnmyat0ipiP0snKDrt0GNg=='
        crossorigin='anonymous' />

    <!-- Boxicons CSS -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">



    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome-animation.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />


    <link rel="stylesheet" href="style.css" type="text/css" media="all">


</head>

<body>
    <!-- nav -->
    <div class="container-flex">
        <nav class="navbar bg-dark navbar-nav navbar-expand-lg fixed-top">
            <div class="container"><a class="navbar-brand" href="#">NPGC</a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-mdb-target="#navbar"
                    aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation"
                    data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="payment.html">Donation</a></li>
                        <li class="nav-item"><a class="nav-link" href="#login">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="3" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="4" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="5" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-spy="scroll" data-bs-smooth-scroll="true"><img
                        class="img-fluid-w-100" alt="First slide" src="images/pic1.jpg" width="100%" height="100%"
                        loading="auto">
                    <div class="d-none d-md-block carousel-caption " style="color: black;">
                        <h1>Prof. Devendar Kumar Singh</h1>
                        <h1>Principal</h1>
                    </div>
                </div>
                <div class="carousel-item"><img class="d-block-w-100 img-fluid" alt="Second slide"
                        src="images/picture1(building).jpg">
                    <div class="d-none d-md-block carousel-caption">

                    </div>
                </div>
                <div class="carousel-item"><img class="d-block-w-100 img-fluid" alt="Third slide"
                        src="images/carousal-2.jpg">
                </div>

            </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators"
                role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span><span
                    class="sr-only">Previous</span></a><a class="carousel-control-next" data-slide="next"
                href="#carouselExampleIndicators" role="button"><span aria-hidden="true"
                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
        </div>
    </div>


    <!-- About US -->

    <div class="section" id="about">
        <h1 data-aos="fade-up">
            <center><B>ABOUT US</B></center>
        </h1>

        <div class="row-cols-lg-5" data-aos="fade-up-right">
            <div class="column-3">
                <img src="images/npgc.jpg" alt="npgc" width="100%">
            </div>
            <div class="column-3">
                <h2>
                    <center>
                        About The College</center>
                </h2><br>
                <center>
                    <p>
                        Welcome to <strong>National Post Graduation College</strong><br></p>
                    <p>
                        National Post Graduate College was established in 1974 by Late Chandra Bhanu Gupta (CM of Uttar
                        Pradesh at that time), close to the banks of river Gomti. It is the only college in a city of 16
                        universities that enjoys the highest status of CPE and Autonomous Status.
                    </p>
                    <p>
                        College provides you with UG and PG courses in Arts and Commerce faculties and
                        UG courses in Science and Computer faculties. The college also offers UG and
                        PG programs for skill development under Deen Dayal Upadhyay Kaushal Kendra.
                    </p>
                    <p>
                        Well-equipped labs, a computerized rich library, e-library, data analysis center, and
                        air-conditioned reading room are some of the basic educational facilities provided by our
                        college.
                    </p>
                    <p>
                        Various NSS and NCC programs aim to instill the idea of social welfare in students. The college
                        also supports the physical wellness of students by giving them rigorous training for several
                        indoor and outdoor sports.
                    </p>
                    <p>
                        National Post Graduate College is one of the most reputed and recognized colleges of Lucknow
                        best
                        known for discipline among students. High-quality education is the ultimate pathway to success
                        and our college administration believes in it.
                    </p>
                </center>
            </div>
        </div>

        <div class="row-3" data-aos="fade-up-left">
            <div class="column-3">
                <p>
                <h2>
                    <center>Vision and Mission</center>
                </h2><br>
                <br>
                <center><strong>
                        Vision :
                    </strong><br>
                    <p>
                        The motto of the college is meritum ethicus i.e. Merit with Ethics. The merit with ethics is a
                        normative discipline. It helps categorize discipline, honesty, and integrity in our actions
                        performed during the day.
                    </p>
                    <p>
                        Our vision is to create a healthy and happy environment where each one of us is free of stress
                        and boosts a more positive mindset in everyone. Our vision is to create a positive classroom
                        environment that helps improve attention, reduce anxiety, and supports the emotional and
                        behavioural regulation of students.
                    </p>
                </center>
                </p>
                <p><br></p>
                <p>
                    <center>
                        <strong>
                            Mission :
                        </strong><br>
                        <p>
                            The mission of the college is focused on the overall character development of the students
                            who can serve their organizations, our country, our society, and humanity.
                        </p>
                        <p>
                            The mission of our college is to provide affordable quality education, while equipping
                            students with knowledge and skills, inculcate values, identify hidden talents, provide
                            opportunities for students to realize their full potential and thus shape them into future
                            leaders, entrepreneurs and good human beings.
                        </p>
                    </center>
                </p>
            </div>
            <div class="column-3">

                <img src="images/vission.jpg" width="100%" alt="npgc">

            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="section" id="service" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <h2 class="section-heading"><b>Services</b></h2>
            </div>
            <div class="row">
                <div class="column" id="membership">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fas fa-plus"></i>
                        </div>
                        <h3>MEMBERSHIPS :</h3>
                        <p>
                            Even after our time at NATIONAL PG College, we remain tied to it and each other.As proud
                            members
                            of
                            the National PG Alumni association, we volunteer, network, and share the spirit of proud
                            students of
                            National PG college throughout our lives.
                        </p>
                        <div>
                            <button type="button" class="btn btn-success btn-lg">Enquire Now</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fas fa-ticket-alt"></i>

                        </div>
                        <h3>EVENTS :</h3>
                        <p>
                            We organize different events for our alumni and our students.We invite our alumni to share
                            their
                            experiences
                            about how they got placed in one of the best companies and provide a one-to-one platform for
                            our
                            students to
                            communicate with our respected alumni every year.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>ALUMNI MEETS :</h3>
                        <p>
                            We welcome you to revisit the campus and have a chance to relieve all those memories of
                            being a
                            college
                            student along with your batchmates. Reacquaint yourself with your professors and yours
                            batchmates
                            which is a much awaited annual
                            event.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>COMMUNITY :</h3>
                        <p>
                            As a community ,Alumni plays an active role in nurturing the lives of our students by
                            helping
                            them
                            with their
                            professional experiences.Alumni also donate their
                            valuable
                            time
                            to share their knowledge in the field of their expertise.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <h3>NEWS :</h3>
                        <p>
                            Check out for the latest news about national pg college along with lucknow national pg
                            college
                            live news at Times of India. Being updated with the world's happenings and being informative
                            is
                            a great confidence booster.
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="icon-wrapper">
                            <i class="fas fa-volleyball-ball"></i>
                        </div>
                        <h3>SPORTS :</h3>
                        <p>
                            The college also supports the physical wellness of students by giving them rigorous training
                            for
                            several indoor and outdoor sports such as Chess, Table Tennis, Lawn Tennis, Bad
                            Minton,athletics, and cricket.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- contact US section -->
    <div data-aos="fade-up">
        <div class="section container-body" id="contact" data-aos="zoom-in">
            <div class="container-c">
                <div class="content">
                    <div class="left-side">
                        <div class="address details">
                            <i class="fa-solid fa-location-dot fa-bounce"""></i>
                            <div class="topic">Address</div>
                            <div class="text-one">2, Rana Pratap Marg <br>
                                Lucknow 226 001<br></div>
                            <div class="text-two">Uttar Pradesh (India)</div>
                        </div>

                        <div class="phone details">
                            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/ssvybplt.json" trigger="hover"
                                colors="primary:#121331" state="hover-phone-ring" style="width:50px;height:50px">
                            </lord-icon>
                            <div class="topic">Phone</div>
                            <div class="text-one">0522 4021304</div>
                            <div class="text-two">+91 75051 87148</div>

                        </div>
                        <div class="email details">
                            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/diihvcfp.json" trigger="hover"
                                style="width:50px;height:50px">
                            </lord-icon>
                            <div class="topic">Email</div>
                            <div class="text-one">support@npgc.in</div>
                            <div class="text-two">placementcell@gmail.com</div>

                        </div>
                    </div>
                    <div class="right-side">
                        <div class="topic-text">Contact Us</div>
                        <p>If you have any queries, you can send us a message from here. It's our pleasure to help you.
                        </p>
                        <form method="POST" enctype="multipart/form-data" id="query_form">
                            <div class="input-box" class="form-control">
                                <input class="input1" type="text" id="name" placeholder="Name">
                                <div>
                                    <p class="shadow-input1 errorField" id="name_er"></p>
                                </div>

                            </div>
                            <div class="input-box">
                                <input class="input1" type="text" id="email" placeholder="Email">
                                <div>
                                    <p class="shadow-input1 errorField " id="email_er"></p>
                                </div>
                            </div>
                            <div class="input-box message-box">
                                <textarea class="input1" id="message" placeholder="Message"></textarea>
                                <div>
                                    <p class="shadow-input1 errorField" id="message_er"></p>
                                </div>
                            </div>

                            <div class="">
                                <button class="contact1-form-btn" type="button" onclick="submit_query()">
                                
                                    <span class="submit-query btn btn-primary   ">
                                        Send Query
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAp -->
    <div class="section" data-aos="zoom-in">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.4697142367327!2d80.94059111485153!3d26.856813783151644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0a819131cb%3A0x11553d04f3a32d9c!2sNational%20Post%20Graduate%20College!5e0!3m2!1sen!2sin!4v1668948204771!5m2!1sen!2sin"
            style="border-radius:10px; height:550px; width:100%;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Testimonials -->
    <div class="section" data-aos="fade-up">
        <div class="container-flex">
            <h1 class="text-center" data-aos="zoom-in" style="font-size:56px;">Testimonals</h1>
            <section class="container-t section" id="testimonials">

                <div class="testimonial mySwiper">
                    <div class="testi-content swiper-wrapper">

                        <div class="slide swiper-slide">
                            <img src="images/student (1).jpeg" alt="" class="image" />
                            <p>
                                I studied BCA at National PG college and in the very first year, I learned all the
                                programming
                                languages that are necessary for my field to get a job in the IT industry.
                                The teachers are well-versed with their subjects and they made learning tough
                                programming
                                language easy for us.
                            </p>
                            <i class="bx bxs-quote-alt-left quote-icon"></i>
                            <div class="details">
                                <span class="name">Vaishnavi Mishra</span>
                                <span class="job">BCA Graduate</span>
                            </div>
                        </div>


                        <div class="slide swiper-slide">
                            <img src="images/student (2).jpeg" alt="" class="image" />
                            <p>
                                I did BA(in psychology)from National PG college as we all know that people do not give
                                much
                                importance to courses like BA but this college gives us all the deserved importance.
                                During
                                3rd
                                semester of my college life, I did an internship in the psychology department.
                            </p>
                            <i class="bx bxs-quote-alt-left quote-icon"></i>
                            <div class="details">
                                <span class="name">Ayush Kumar</span>
                                <span class="job">BA</span>
                            </div>
                        </div>



                        <div class="slide swiper-slide">
                            <img src="images/student (4).jpeg" alt="" class="image" />
                            <p>
                                I did BA from National PG college and I must say that it was not a bad decision. I have
                                developed all the necessary skills during my college. This college also motivates us to
                                develop
                                and grow as a person.
                            </p>
                            <i class="bx bxs-quote-alt-left quote-icon"></i>
                            <div class="details">
                                <span class="name">Yashasvika Rujali Saxena</span>
                                <span class="job">BA Graduate</span>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-next nav-btn"></div>
                    <div class="swiper-button-prev nav-btn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

        </div>
    </div>

    <!-- ======= Gallery Section ======= -->
    <div class="section" data-aos="zoom-in">
        <div class="container">
            <section id="gallery" class="gallery">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 style="font-size:70px; text-align: center;">Gallery</h2>
                        <p style="text-align:center;">Some photos from Our College</p>
                    </div>
                </div>

                <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

                    <div class="row g-0">

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery-1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery6_11zon.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery-3.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery-1.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/carousal-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/carousal-2.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>



                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery-6.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery-7.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="gallery-item">
                                <a href="images/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                                    <img src="images/gallery-8.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

        </div>
    </div>

    <!-- Events -->
    <div class="section" data-aos="zoom-in">
        <div class="container">
            <div class="container section" id="newsEvents">
                <h1 class="text-center">Events</h1>
                <div class="vertical-menu ">
                    <div>
                        <a href="#"> Comfest </a>
                    </div>
                    <div>
                        <a href="#" class="active"> Techfest<span class="badge badge-info s">NEW</span> </a>
                    </div>
                    <div>
                        <a href="#"> Science fest </a>

                    </div>
                    <div>
                        <a href="#"> Shana-E-Awadh</a>

                    </div>
                    <div>
                        <a href="#"> Alumni Meets </a>
                    </div>
                    <div>
                        <a href="#"> Hindi Diwas </a>
                    </div>
                    <div>
                        <a href="#"> Chess </a>
                    </div>
                    <div>
                        <a href="#"> Book Fair </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Login/signup -->
    <div class="section" id="login" data-aos="fade-up">
        <h1 class="text-center">Login/Signup</h1>
        <div class="w-100  d-flex justify-content-center pb-4">
            <div style="width: 26rem;">
                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                            aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                            aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Email or username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                            checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#!">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                    aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </div>

    <!-- Notification -->

    <div class="notification  ">

        <div class="button-open position-fixed bottom-0 end-0">
            <img src="images/headphones_1.png" alt="">
        </div>

        <div class="box position-fixed bottom-0 end-0 ">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="button-close">X</div>
                    </div>
                    <div class="col-4">
                        <img src="images/headphones_1.png" alt="" class="img-responsive">
                    </div>
                    <div class="col-8 ">
                        <div class="row">
                            <div class="col-12">Mobile No.</div>
                            <div class="col-12">0522 261 8312</div>
                            <div class="col-12">Email Id</div>
                            <div class="col-12">support@npgc.in</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Whatsapp -->

    <div class="whatsapp ">
        <a href=" https://wa.me/7505187148" target="_blank">
            <img src="images/whatsapp.png" alt="" class="img-responsive">
        </a>
    </div>


    <!-- Footer -->

    <footer class="footer">
        <div class="container-1">
            <div class="row-1">
                <div class="footer-col">
                    <h4>Information</h4>
                    <ul class="footer-ul">
                        <li><a href="#">Home</a></li>
                        <li><a href="#membership">Membership Cards</a></li>
                        <li><a href="#newsEvents">Alumni Events</a></li>
                        <li><a href="#">Alumni News</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul class="footer-ul">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Donations</a></li>
                        <li><a href="#">Donation Status</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100077298611552"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/npgclucknow"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/channel/UCBp95rTIuX1xWMybGhaxtDQ"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/national-pg-college/"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://instagram.com/placementcell.npgc?igshid=YmMyMTA2M2Y"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="php/custom.js"></script>

    <!-- Animation Lib -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- SITE SCRIPT  -->


    <!-- BOOTSTRAP JS -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>






    <!-- Swiper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js'
        integrity='sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA=='
        crossorigin='anonymous'></script>


    <script src="asset/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js?h=981245863c383366a329259d02b8172c"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
    <script src="assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=981245863c383366a329259d02b8172c"></script>
    <script src="assets/js/jquery.min.js?h=84e399b8f2181ccd73394fdeddff1638"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=981245863c383366a329259d02b8172c"></script>
    <script src="assets/js/jquery.min.js?h=8fb8fee4fcc3cc86ff6c724154c49c42"></script>



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <!-- File Script -->
    <script src="index.js"></script>
</body>

</html>