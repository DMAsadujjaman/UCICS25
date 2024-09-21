@extends('frontend.master')
@section('content')
@php
$count = 0;
@endphp
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $slider)
            <div class="carousel-item @if ($count == 0) { active } @endif">
                {{-- <img class="w-100" src="{{ asset('public') }}/img/carousel-1.jpg" alt="Image"> --}}

                <img class="w-100" src="{{ asset('public/img/') . $slider->image }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 pt-5">
                                {{-- <h1 class="display-4 text-white mb-3 animated slideInDown">Undergraduate Conference
                                        on Intelligent Computing and Systems(UCICS 2024)</h1>  --}}
                                <h1 class="display-4 text-white mb-3 animated slideInDown">{{ $slider->title }}
                                </h1>
                                <p class="fs-5 text-white-50 mb-5 animated slideInDown">{{ $slider->subTitle }}</p>

                                {{-- <p class="fs-5 text-white-50 mb-3 animated slideInDown">24 July, 2024</p>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Varendra University, Rajshahi, Bangladesh</p>  --}}
                                <h4 class=" text-white mb-3 animated slideInDown">{{ $slider->date }}</h4>
                                <h4 class=" text-white mb-3 animated slideInDown">{{ $slider->location }}</h4>
                                @if ($count == 0)
                                <a class="btn btn-primary py-2 px-3 me-3" href="">
                                    Call for Paper
                                </a>
                                <a class="btn btn-outline-primary py-2 px-3" href="">
                                    Submit Paper
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
            $count++;
            @endphp
            @endforeach


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
            {{-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="public\img\vu5.jpg" alt=""
                            style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="public\img\team-1.jpg"
                            alt="" style="width: 200px; height: 200px;">
                    </div>
                </div> --}}
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-6">{!! $chair->title!!}</h1>
                        <p class="fs-5 text-dark-50 mb-5">{!! $chair->subtitle!!}</p>
                    </div>

                    {{-- <h1 class="display-6 mb-5">Welcome to UCICS-2025</h1> --}}

                    <div class="border-bottom border-3 border-primary rounded  mb-4">
                        <p class="text-dark mb-2" style="text-align: justify;">{!! $chair->details!!}</p>
                        <div class="d-flex flex-column align-items-end">
                            <span class="text-primary text-center">{!! $chair->name!!}</span>
                            <span class="text-primary text-center">{!! $chair->position!!}</span>
                            <span class="text-primary text-center">{!! $chair->dept!!}</span>

                            <span class="text-primary text-center">{!! $chair->address!!}</span>
                            <span class="text-primary text-center">{!! $chair->email!!}</span>
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


                    <h1 class="display-6 mb-5">{{$abouts->title}}</h1>
                    <div class="mb-5" style="text-align: justify;">{!!$abouts->about!!}</div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">

                    <h1 class="display-6 mb-5">Important Dates</h1>
                    <div class="mt-5">

                        <div class="row align-items-center" style="background-color: #f8f9fa; padding: 10px 0;">
                            <div class="col-7 text-left">Paper Submission:</div>
                            <div class="col-5 text-right">
                                <span style="position: relative; display: inline-block;">
                                    <!-- Conditionally apply strikethrough -->
                                    @if($abouts->submission_date_final)
                                    <span
                                        style="color: red; text-decoration: line-through; text-decoration-thickness: 2px;">
                                        {{ $abouts->submission_date }}
                                    </span>
                                    @else
                                    {{ $abouts->submission_date }}
                                    @endif
                                </span>
                            </div>
                            <div class="col-7 text-left"></div>
                            <div class="col-5 text-right">
                                <!-- Display submission_date_final if it's not null -->
                                {{ $abouts->submission_date_final ?: '' }}
                            </div>
                        </div>
                        <div class="row align-items-center" style="padding: 10px 0;">
                            <div class="col-7 text-left">Notification of Acceptance:</div>
                            <div class="col-5 text-right">
                                <span style="position: relative; display: inline-block;">
                                    <!-- Conditionally apply strikethrough -->
                                    @if($abouts->acceptance_date_final)
                                    <span
                                        style="color: red; text-decoration: line-through; text-decoration-thickness: 2px;">
                                        {{ $abouts->acceptance_date }}
                                    </span>
                                    @else
                                    {{ $abouts->acceptance_date }}
                                    @endif
                                </span>
                            </div>
                            <div class="col-7 text-left"></div>
                            <div class="col-5 text-right">
                                <!-- Display acceptance_date_final if it's not null -->
                                {{ $abouts->acceptance_date_final ?: '' }}
                            </div>
                        </div>
                        <div class="row align-items-center" style="background-color: #f8f9fa; padding: 10px 0;">
                            <div class="col-7 text-left">Camera-Ready Paper Submission:</div>
                            <div class="col-5 text-right">
                                <span style="position: relative; display: inline-block;">
                                    <!-- Conditionally apply strikethrough -->
                                    @if($abouts->cam_submission_date_final)
                                    <span
                                        style="color: red; text-decoration: line-through; text-decoration-thickness: 2px;">
                                        {{ $abouts->cam_submission_date }}
                                    </span>
                                    @else
                                    {{ $abouts->cam_submission_date }}
                                    @endif
                                </span>
                            </div>
                            <div class="col-7 text-left"></div>
                            <div class="col-5 text-right">
                                <!-- Display cam_submission_date_final if it's not null -->
                                {{ $abouts->cam_submission_date_final ?: '' }}
                            </div>
                        </div>

                        <div class="row align-items-center" style="padding: 10px 0;">
                            <div class="col-7 text-left">Registration:</div>
                            <div class="col-5 text-right">
                                <span style="position: relative; display: inline-block;">
                                    <!-- Conditionally apply strikethrough -->
                                    @if($abouts->registration_date_final)
                                    <span
                                        style="color: red; text-decoration: line-through; text-decoration-thickness: 2px;">
                                        {{ $abouts->registration_date }}
                                    </span>
                                    @else
                                    {{ $abouts->registration_date }}
                                    @endif
                                </span>
                            </div>
                            <div class="col-7 text-left"></div>
                            <div class="col-5 text-right">
                                <!-- Display registration_date_final if it's not null -->
                                {{ $abouts->registration_date_final ?: '' }}
                            </div>
                        </div>




                        <div class="row align-items-center" style="background-color: #f8f9fa; padding: 10px 0;">
                            <div class="col-7 text-left">Conference Date:</div>
                            <div class="col-5 text-right">
                                <span style="position: relative; display: inline-block;">
                                    <!-- Conditionally apply strikethrough -->
                                    @if($abouts->conference_date_final)
                                    <span
                                        style="color: red; text-decoration: line-through; text-decoration-thickness: 2px;">
                                        {{ $abouts->conference_date }}
                                    </span>
                                    @else
                                    {{ $abouts->conference_date }}
                                    @endif
                                </span>
                            </div>
                            <div class="col-7 text-left"></div>
                            <div class="col-5 text-right">
                                <!-- Display conference_date_final if it's not null -->
                                {{ $abouts->conference_date_final ?: '' }}
                            </div>
                        </div>



                        <div class="row align-items-center" style="padding: 10px 0;">

                        </div>
                        <div class="row align-items-center" style="background-color: #FF6F0F !important; padding: 1px 0;">

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

            <h1 class="display-6 mb-5">{{$call_fps->title}}</h1>
        </div>
        <div class="row g-4 justify-content-center">

            <p class="mb-3" style="text-align: justify;">{!!$call_fps->about!!}</p>
            <div class="wrapper">
                <div class="">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
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
            @foreach ($scopes as $scope)
            @if(!empty($scope->title))
            <h1 class="display-6 mb-5">{{$scope->title}}</h1>
            @endif
            @endforeach
        </div>
        <p class="mb-5" style="text-align: justify;">The papers are invited on, but not limited to, the following
            topics:</p>
        <div class="row g-4 justify-content-center">
            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
            </div> --}}

            <table id="rwd-table">

                <tbody>
                    @foreach ($scopes as $scope)
                    <tr>
                        <td>{{ $scope->col_1 }}</td>
                        <td>{{ $scope->col_2 }}</td>
                        <td>{{ $scope->col_3 }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>







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




@endsection

@php
// {$futureDate = $abouts->submission_date;}
{$abouts->submission_date_final ? $abouts->submission_date_final : $abouts->submission_date; $futureDate =
(!empty($abouts->submission_date_final)) ? $abouts->submission_date_final : $abouts->submission_date;}
@endphp