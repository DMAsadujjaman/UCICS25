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
                                <h1 class="display-4 text-white mb-3 animated slideInDown">Committees</h1>
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
                        @foreach ($orgcs as $orgc)
                        <tr>
                            <td>{{ $orgc->name }}</td>
                            <td>{{ $orgc->affil }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
            </div>
            <h3>Advisory Committee</h3>
            <div class="row g-4 justify-content-center">


                <table id="rwd-table">
                    <thead>
                        <tr>
                            <td style="color: #FF6F0F; font-weight: 700">Name</td>
                            <td style="color: #FF6F0F; font-weight: 700">Affiliation</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($advcs as $advc)
                        <tr>
                            <td>{{ $advc->name }}</td>
                            <td>{{ $advc->affil }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <h3>Technical Committee</h3>
            <div class="row g-4 justify-content-center">


                <table id="rwd-table">
                    <thead>
                        <tr>
                            <td style="color: #FF6F0F; font-weight: 700">Name</td>
                            <td style="color: #FF6F0F; font-weight: 700">Affiliation</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teccs as $teccs)
                        <tr>
                            <td>{{ $teccs->name }}</td>
                            <td>{{ $teccs->affil }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <h3>Registration Committee</h3>

            <div class="row g-4 justify-content-center">


                <table id="rwd-table">
                    <thead>
                        <tr>
                            <td style="color: #FF6F0F; font-weight: 700">Name</td>
                            <td style="color: #FF6F0F; font-weight: 700">Affiliation</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regcs as $regc)
                        <tr>
                            <td>{{ $regc->name }}</td>
                            <td>{{ $regc->affil }}</td>
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