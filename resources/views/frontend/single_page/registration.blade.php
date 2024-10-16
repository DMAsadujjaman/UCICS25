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
                                @foreach($regs as $reg)
                                @if(!empty($reg->title))
                                <h1 class="display-4 text-white mb-3 animated slideInDown">{!! $reg->title !!}</h1>
                                @break
                                @else
                                <h3>Registration</h3>
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

        <div class="row g-4 justify-content-center">
            @foreach($regs as $reg)
            @if(!empty($reg->title))
            <h3>{!! $reg->title !!}</h3>

            {!! $reg->text1 !!} <br>
            {!! $reg->table_title !!} <br>
            @break
            @else
            <h3>Registration</h3>
            @endif
            @endforeach
<<<<<<< HEAD
            <div class="row g-4 ">
                <table id="rwd-table" style="width: 80%">
                    <thead>
                        <tr>
                            <td style="color: #FF6F0F; font-weight: 700;">Category</td>
=======
            <div class="row g-4 justify-content-center">
                <table id="rwd-table">
                    <thead>
                        <tr>
                            <td style="color: #FF6F0F; font-weight: 700">Category</td>
>>>>>>> 817ca8d074ef94bfbb53b5dee4f7b81c410102c7
                            <td style="color: #FF6F0F; font-weight: 700">International</td>
                            <td style="color: #FF6F0F; font-weight: 700">Local</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regs as $reg)
                        <tr>
<<<<<<< HEAD
                            <td style=" color: black;">{!! $reg->cat !!}</td>
                            <td style=" color: black;">{!! $reg->int !!}</td>
                            <td style=" color: black;">{!! $reg->nat !!}</td>
=======
                            <td>{!! $reg->cat !!}</td>
                            <td>{!! $reg->int !!}</td>
                            <td>{!! $reg->nat !!}</td>
>>>>>>> 817ca8d074ef94bfbb53b5dee4f7b81c410102c7
                        </tr>
                        @endforeach
                    </tbody>

                </table>


            </div>
            @foreach($regs as $reg)
            @if(!empty($reg->note))
            {!! $reg->note !!}
            {!! $reg->text2 !!}
            {!! $reg->img1 !!}
            {!! $reg->text3 !!}
            {!! $reg->img2 !!}
            {!! $reg->text4 !!}
            {!! $reg->link !!}
            @break
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
@endsection