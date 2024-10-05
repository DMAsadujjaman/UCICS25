@extends('frontend.master')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                    <img class="w-100" style="height: 300px; object-fit: cover" src="{{ asset('public/img/') . $camsubmissionGL->image_1 }}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">{{$camsubmissionGL->title}}</h1>
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

        <div class="row g-4 justify-content-center" style="color: black">
            {!! $camsubmissionGL->text_1 !!}
            @if (!empty($camsubmissionGL->image_2))
            <div class="w-100" style="height: 400px;">
                <img class="w-100" style="height: 400px; object-fit: cover"
                    src="{{ asset('public/img/' . $camsubmissionGL->image_2) }}" alt="Image">
            </div>
            @else

            @endif

            {!! $camsubmissionGL->text_2 !!}
            @if (!empty($camsubmissionGL->image_3))
            <div class="w-100" style="height: 400px;"  >
                <img class="w-100" style="height: 400px; object-fit: cover"
                    src="{{ asset('public/img/' . $camsubmissionGL->image_3) }}" alt="Image">
            </div>
            @else

            @endif
            {!! $camsubmissionGL->text_3 !!}

        </div>
    </div>
</div>
<!-- Service End -->
@endsection
