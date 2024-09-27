@extends('frontend.master')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" style="height: 300px" src="{{ asset('public') }}/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Frequently Asked Questions</h1>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div id="submission" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="display-12 mb-5">Frequently Asked Questions</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="faq-content">
                    <div class="faq-question">
                        <input id="q1" type="checkbox" class="panel">
                        <div class="plus" style="padding-right: 10px">+</div>
                        <label for="q1" class="panel-title">What is the meaning of life?</label>
                        <div class="panel-content">42</div>
                    </div>

                    <div class="faq-question">
                        <input id="q2" type="checkbox" class="panel">
                        <div class="plus">+</div>
                        <label for="q2" class="panel-title">How much wood would a woodchuck chuck?</label>
                        <div class="panel-content">A woodchuck would chuck all the wood he could chuck, if a woodchuck could
                            chuck wood!</div>
                    </div>

                    <div class="faq-question">
                        <input id="q3" type="checkbox" class="panel">
                        <div class="plus">+</div>
                        <label for="q3" class="panel-title">What happens if Pinocchio says, "my nose will grow
                            now"?</label>
                        <div class="panel-content">Certain questions are better left &nbsp; <a
                                href="https://en.wikipedia.org/wiki/The_Unanswered_Question" target="_blank">unanswered</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
