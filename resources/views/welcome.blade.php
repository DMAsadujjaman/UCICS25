@extends('frontend.master')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('public') }}/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Undergraduate Conference
                                        on Intelligent Computing and Systems(UCICS 2024)</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Empowering Tomorrow&apos;s
                                        Innovators</p>

                                    {{--  <p class="fs-5 text-white-50 mb-3 animated slideInDown">24 July, 2024</p>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Varendra University, Rajshahi, Bangladesh</p>  --}}
                                    <h4 class=" text-white mb-3 animated slideInDown">24 July, 2024</h4>
                                    <h4 class=" text-white mb-3 animated slideInDown">Varendra University, Rajshahi,
                                        Bangladesh</h4>
                                    <a class="btn btn-primary py-2 px-3 me-3" href="">
                                        Call for Paper

                                    </a>
                                    <a class="btn btn-outline-primary py-2 px-3" href="">
                                        Submit Paper

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('public') }}/img/vu22.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let&apos;s Save More Lifes
                                        With
                                        Our Helping Hand</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos.
                                        Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

        </div>
    </div>
    <!-- Carousel End -->
    <!-- some speach -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="public\img\vu5.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="public\img\team-1.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        
                        <h1 class="display-6">Welcome to UCICS-2025</h1>
                        <p class="fs-5 text-dark-50 mb-5">Empowering Tomorrow&apos;s Innovators</p>
                        {{-- <div class="border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2" style="text-align: justify;">The Undergraduate Conference on Intelligent Computing and Systems (UCICS) is going to be a two day long conference, organized by the Department of Computer Science and Engineering, Varendra University, in order to encourage the undergraduate students of computer science discipline to gather hands-on experience on the state-of-the-art research applications by learning from the experts. The UCICS aims to be a platform of fantastic opportunity for the undergraduate students to build connections, gain knowledge and show excellence. We look forward to meeting you on this journey of learning, innovation and inspiration.Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                            <span class="text-primary text-end d-block">Prof. Dr.</span>
                            <span class="text-primary text-end d-block">Conference Chair, UCICS-2025</span>
                            <span class="text-primary text-end d-block">Department of Computer Science and Engineering</span>
                            <span class="text-primary text-end d-block">Varendra University</span>
                            <span class="text-primary text-end d-block">Chandrima, Paba, Rajshahi-6204</span>
                            <span class="text-primary text-end d-block">Email: </span>

                        </div> --}}
                        <div class="border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2" style="text-align: justify;">The Undergraduate Conference on Intelligent Computing and Systems (UCICS) is going to be a two-day-long conference, organized by the Department of Computer Science and Engineering, Varendra University, in order to encourage the undergraduate students of computer science discipline to gather hands-on experience on the state-of-the-art research applications by learning from the experts. The UCICS aims to be a platform of fantastic opportunity for the undergraduate students to build connections, gain knowledge, and show excellence. We look forward to meeting you on this journey of learning, innovation, and inspiration. Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                            <div class="d-flex flex-column align-items-end">
                                <span class="text-primary text-center">Prof. Dr.</span>
                                <span class="text-primary text-center">Conference Chair, UCICS-2025</span>
                                <span class="text-primary text-center">Department of Computer Science and Engineering</span>
                                
                                <span class="text-primary text-center">Varendra University, Chandrima, Paba, Rajshahi-6204</span>
                                <span class="text-primary text-center">Email: </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- some speach END-->
    <!-- About Start -->
    <div class="container-xxl py-5" id="ab">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">


                        <h1 class="display-6 mb-5">About the Conference</h1>
                        <p class="mb-5" style="text-align: justify;">Tempor erat elitr rebum at clita. Diam dolor
                            diam
                            ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">

                        <h1 class="display-6 mb-5">Important Dates</h1>

                        <div class=" mt-5">
                            <div class="row align-items-center" style="background-color: #f8f9fa; padding: 10px 0;">
                                <div class="col-7 text-left">Paper Submission:</div>
                                <div class="col-5 text-right">20 December, 2024</div>
                            </div>
                            <div class="row align-items-center" style="padding: 10px 0;">
                                <div class="col-7 text-left">Notification of Acceptance:</div>
                                <div class="col-5 text-right">20 December, 2024</div>
                            </div>
                            <div class="row align-items-center" style="background-color: #f8f9fa; padding: 10px 0;">
                                <div class="col-7 text-left">Camera-Ready Paper Submission:</div>
                                <div class="col-5 text-right">20 December, 2024</div>
                            </div>
                            <div class="row align-items-center" style="padding: 10px 0;">
                                <div class="col-7 text-left">Registration:</div>
                                <div class="col-5 text-right">20 December, 2024</div>
                            </div>
                            <div class="row align-items-center" style="background-color: #f8f9fa; padding: 10px 0;">
                                <div class="col-7 text-left">Conference Date:</div>
                                <div class="col-5 text-right">20 December, 2024</div>
                            </div>
                            <div class="row align-items-center" style="padding: 10px 0;">

                            </div>
                            <div class="row align-items-center" style="background-color: #000000; padding: 1px 0;">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5" id="cfp">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                <h1 class="display-6 mb-5">Call for Paper</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <p class="mb-3" style="text-align: justify;">Tempor erat elitr rebum at clita. Diam dolor diam
                    ipsum sit. Aliqu diam amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                    dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                    amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                    dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                    amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                    dolore erat amet. Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                    amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                    dolore erat amet</p>
                <div class="wrapper">
                    <div class="">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                            style="max-width: 500px;">
                            <h1 class="title display-7 mb-2">Submission Deadline</h1>
                        </div>
                        <div class="countdown-container">
                            <div>
                                <p id="days" class="big-text">
                                    0
                                </p>
                                <span>Days</span>
                            </div>
                            <div>
                                <p id="hours" class="big-text">
                                    0
                                </p>
                                <span>Hours</span>
                            </div>
                            <div>
                                <p id="min" class="big-text">
                                    0
                                </p>
                                <span>Min</span>
                            </div>
                            <div>
                                <p id="sec" class="big-text">
                                    0
                                </p>
                                <span>Sec</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Causes End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Scope of the Conference</h1>
            </div>
            <p class="mb-5" style="text-align: justify;">The papers are invited on, but not limited to, the following topics:</p>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white h-100 p-4 p-xl-5" style="min-height: 300px;">
                        <p>Artificial Intelligence</p>
                        <p>Big Data Analysis</p>
                        <p>BioInformatics</p>
                        <p>Biomedical Engineering</p>
                        <p>Blockchain Technology</p>
                        <p>Cybersecurity</p>
                        <p>Cloud Computing</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white h-100 p-4 p-xl-5" style="min-height: 300px;">
                        <p>Computer Vision</p>
                        <p>Data Science</p>
                        <p>Embedded Systems</p>
                        <p>ICT for Sustainable Development</p>
                        <p>Image Processing</p>
                        <p>Internet of Things</p>
                        <p>Machine Learning</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white h-100 p-4 p-xl-5" style="min-height: 300px;">
                        <p>Mobile Communications</p>
                        <p>Robotics</p>
                        <p>Signal Processing</p>
                        <p>Software Engineering</p>
                        <p>Time Series Modelling</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll"
        data-image-src="{{ asset('public') }}/img/carousel-2.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 wow fadeIn" style="text-align: center;" data-wow-delay="0.1s">

                    <h1 class="display-6 text-white mb-3">Thanks For The Results Achieved With You</h1>
                    <p class="text-white-50 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo
                        magna dolore erat amet</p>
                </div>
                {{--  <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-light border-0" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                        <label class="btn btn-light py-3" for="btnradio1">$10</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                        <label class="btn btn-light py-3" for="btnradio2">$20</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                        <label class="btn btn-light py-3" for="btnradio3">$30</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary px-5" style="height: 60px;">
                                        Donate Now

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  --}}
            </div>
        </div>
    </div>
    <!-- Donate End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                <h1 class="display-6 mb-5">Keynote Speakers</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('public') }}/img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('public') }}/img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('public') }}/img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('public') }}/img/team-4.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Full Name</h5>
                            <p class="text-primary">Designation</p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{--  <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimonial</div>
                <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('public') }}/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('public') }}/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4"
                        src="{{ asset('public') }}/img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- Testimonial End -->
@endsection
