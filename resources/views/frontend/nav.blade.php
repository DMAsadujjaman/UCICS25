<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-8 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>{{$contacts->address}}</small>
                {{--  <small>
                    <img src="https://vu.edu.bd/img/ico/favicon.ico" alt="Location Icon" style="width: 16px; height: 16px; margin-right: 8px;">

                </small>  --}}

            <small class="ms-4"><i class="fa fa-envelope me-2"></i>{{$contacts->email}}</small>
        </div>
        <div class="col-lg-4 px-5 text-end">
            <small>Stay Connected:</small>
            <a class="text-white-50 ms-3" href="{{$contacts->fb}}"><i class="fab fa-facebook-f"></i></a>
            <a class="text-white-50 ms-3" href="{{$contacts->insta}}"><i class="fab fa-linkedin-in"></i></a>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        {{-- <a href="{{ route('welcome') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">UCICS<span class="text-white">24</span></h1>
        </a> --}}
        <a href="{{ route('welcome') }}" class="navbar-brand ms-4 ms-lg-0">
            <img src="{{ asset('public/img/') . $contacts->logo}}" alt="UCICS25 Logo" class="img-fluid" style="height: 60px;">
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('welcome') }}" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Important Info </a>
                    <div class="dropdown-menu m-0">
                        <!--<a href="{{ route('download.down_cf') }}" class="dropdown-item">Call for papers</a>-->
                        <a href="{{route('welcome')}}#spk" class="dropdown-item">Speakers</a>
                        <a href="{{route('committee')}}" class="dropdown-item">Committees</a>
                        <a href="#ftr" class="dropdown-item">Conference Venue</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Submission</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{route('welcome')}}#scp" class="dropdown-item">Conference Scopes</a>
                        <!--<a href="{{ route('download.down_cf') }}" class="dropdown-item">Call for papers</a>-->
                        <a href="{{route('submissionguide')}}" class="dropdown-item">Submission Guideline</a>
                        <a href="{{route('camsubmissionguide')}}" class="dropdown-item">Camera Ready Submission Guideline</a>
                        <!--<a href="{{route('welcome')}}#spk" class="dropdown-item">Speakers</a>-->
                        <!--<a href="{{route('committee')}}" class="dropdown-item">Committees</a>-->
                        <!--<a href="#ftr" class="dropdown-item">Conference Venue</a>-->
                    </div>
                </div>
                <a href="{{route('welcome')}}#spn" class="nav-item nav-link">Sponsors</a>
                {{-- <a href="{{route('swaward')}}" class="nav-item nav-link">Student Paper Award</a> --}}
                <a href="{{route('welcome')}}#ab" class="nav-item nav-link">Important Deadlines</a>
                {{--  <a href="#cfp" class="nav-item nav-link">Call for Paper</a>  --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Participant
                        Resources</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('faq') }}" class="dropdown-item">FAQ</a>
                        <a href="#" class="dropdown-item">Conference Flyers</a>
                        <a href="#" class="dropdown-item">Full Paper Template</a>
                        <a href="#" class="dropdown-item">Conference Poster</a>
                        <a href="#" class="dropdown-item">Program Booklet</a>
                        <a href="#" class="dropdown-item">Developing the Presentation</a>

                    </div>
                </div> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Participant Resources</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('faq') }}" class="dropdown-item">FAQ</a>
                        <a href="{{ route('download.down_cf') }}" class="dropdown-item">Conference Flyers</a>

                        <!-- Full Paper Template with 2nd level dropdown -->
                        <div class="dropdown-submenu position-relative">
                            <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Full Paper Template</a>
                            <div class="dropdown-menu submenu">
                                <a href="{{ route('download.down_wt') }}" class="dropdown-item">Word Template</a>
                                <a href="{{ route('download.down_latx') }}" class="dropdown-item">LaTeX Template</a>
                            </div>
                        </div>

                        <a href="{{ route('download.subGL') }}" class="dropdown-item">Submission Guideline</a>
                        <a href="{{ route('download.camsubGL') }}" class="dropdown-item">Camera Ready Submission Guideline</a>
                        {{-- <a href="{{ route('download.down_cp') }}" class="dropdown-item">Conference Poster</a> --}}
                        <a href="{{ route('download.down_dtp') }}" class="dropdown-item">Presentation Guideline</a>
                        <a href="{{ route('download.down_bl') }}" class="dropdown-item">Program Booklet</a>

                    </div>
                </div>



                <a href="{{route('reg')}}" class="nav-item nav-link">Registration</a>
                <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            </div>




        </div>

        <a href="https://vu.edu.bd/" class="navbar-brand ms-4 ms-lg-0">
            <img src="https://vu.edu.bd/img/whitelogo.png" alt="Varendra University Logo" class="img-fluid" style="height: 50px;">
        </a>
    </nav>
</div>
<!-- Navbar End -->
