@extends('frontend.master')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 " src="{{ asset('public') }}/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Undergraduate Conference
                                        on Intelligent Computing and Systems(UCICS 2024)</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Empowering Tomorrows
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
            </div>
        </div>

    </div>
    </div>
    <!-- Carousel End -->
    <!-- Service Start -->
    <div id="submission" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-5">Committees</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <h3>Organizing Committee</h3>

                <div class="row g-4 justify-content-center">


                    <table id="rwd-table">

                        <thead>
                            <tr>
                                <td style="color: #FF6F0F; font-weight: 700">Name</td>
                                <td style="color: #FF6F0F; font-weight: 700">Affiliation</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($scopes as $scope)
                                <tr>
                                    <td>{{ $scope->col_1 }}</td>
                                    <td>{{ $scope->col_2 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h3>Advisory Committee</h3>
                <div class="row g-4 justify-content-center">


                    <table id="rwd-table">

                        <tbody>
                            @foreach ($scopes as $scope)
                                <tr>
                                    <td>{{ $scope->col_1 }}</td>
                                    <td>{{ $scope->col_2 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <h3>Technical Committee</h3>
                <div class="row g-4 justify-content-center">


                    <table id="rwd-table">

                        <tbody>
                            @foreach ($scopes as $scope)
                                <tr>
                                    <td>{{ $scope->col_1 }}</td>
                                    <td>{{ $scope->col_2 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <h3>Registration Committee</h3>

                <div class="row g-4 justify-content-center">


                    <table id="rwd-table">

                        <tbody>
                            @foreach ($scopes as $scope)
                                <tr>
                                    <td>{{ $scope->col_1 }}</td>
                                    <td>{{ $scope->col_2 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
