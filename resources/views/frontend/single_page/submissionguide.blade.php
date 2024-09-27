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
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Paper Submission Guidelines</h1>
    
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
                <h3>Paper Submission Guidelines</h3>
                <p style="text-align: justify;">Authors are invited to submit their original, unpublished papers electronically (PDF format using the
                    IEEE conference template) through conference website. Paper submissions should be limited to a maximum
                    of six (6) pages, in the IEEE 2-column format including figures and references. All submissions will be
                    reviewed double-blind by the Program Committee on the basis of technical quality, originality, and
                    clarity of presentation.
                </p>

                <h3>Double-Blind Paper:</h3>

                <p style="text-align: justify;">
                    The authors should not include their names, affiliations, postal addresses, and email addresses in the
                    initial manuscript. If it is not maintained the manuscript will be immediately rejected.
                </p>

                <h3>Manuscript Template:</h3>
                <p style="text-align: justify;">
                    Submissions must follow standard IEEE conference templates (Please download A4 Size Template).
                    </br> The manuscript template is provided in the following links:
                    <a href="#" target="_blank" rel="noopener noreferrer">MS Word (A4)</a>
                    <a href="#" target="_blank" rel="noopener noreferrer">Latex</a>





                   </br>  For more information visit <a href="https://www.ieee.org/conferences/publishing/templates.html"
                        target="_blank" rel="noopener noreferrer">IEEE Conference Templates.</a>
                </p>

                <h3>Microsoft CMT Submission:</h3>
                <p style="text-align: justify;">
                    Each paper needs to be submitted electronically as a single PDF file through Microsoft CMT.

                    </br> Paper submission link is : <a href="https://cmt3.research.microsoft.com/ICCITconf2024"
                        target="_blank" rel="noopener noreferrer">Microsoft CMT</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
