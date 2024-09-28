@extends('frontend.master')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                @foreach ($faqs as $faq)
                @if (!empty($faq->image))

                <img class="w-100" style="height: 300px; object-fit: cover"
                    src="{{ asset('public/img/') . $faq->image }}" alt="Image">
                    @break
                @endif
                @endforeach

                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 pt-5">
                                @foreach ($faqs as $faq)
                                @if (!empty($faq->title))
                                <h1 class="display-4 text-white mb-3 animated slideInDown">{{ $faq->title }}</h1>
                                @break
                                @endif
                                @endforeach

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

            @foreach ($faqs as $faq)
            @if (!empty($faq->title))
            <h3 class="display-12 mb-5">{{ $faq->title }}</h3>
            @break
            @endif
            @endforeach
        </div>
        <div class="row g-4 justify-content-center">
            <div class="faq-content">
                @foreach ($faqs as $faq)
                <div class="faq-question">
                    <input id="{{$faq->id}}" type="checkbox" class="panel">
                    <div class="plus" style="padding-right: 10px">+</div>
                    <label for="{{$faq->id}}" class="panel-title">{{$faq->qus}}</label>
                    <div class="panel-content">{{$faq->ans}}</div>
                </div>
                @endforeach



            </div>
        </div>
    </div>
</div>
<!-- Service End -->
@endsection