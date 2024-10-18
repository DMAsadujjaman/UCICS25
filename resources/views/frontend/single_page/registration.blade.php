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
            <div class="row g-4 ">
                <table id="rwd-table" style="width: 80%">
                    <thead>
                        <tr>
                            <td style="color: #FF6F0F; font-weight: 700;">Category</td>
                            <td style="color: #FF6F0F; font-weight: 700">International</td>
                            <td style="color: #FF6F0F; font-weight: 700">Local</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($regs as $reg)
                        <tr>
                            <td style=" color: black;">{!! $reg->cat !!}</td>
                            <td style=" color: black;">{!! $reg->int !!}</td>
                            <td style=" color: black;">{!! $reg->nat !!}</td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>


            </div>
            @foreach($regs as $reg)
            @if(!empty($reg->note))
            {!! $reg->note !!}
            
            @endif
            @if(!empty($reg->text2))
            {!! $reg->text2 !!}
            
            @endif
            @if(!empty($reg->img1))
            {!! $reg->img1 !!}
            
            @endif
            @if(!empty($reg->text3))
            {!! $reg->text3 !!}
            
            @endif
            @if(!empty($reg->img2))
            {!! $reg->img2 !!}
            
            @endif
            @if(!empty($reg->text4))
            {!! $reg->text4 !!}
            
            @endif

            <h5>Registration Link:
            @if(!empty($reg->link))
             <a href="{{ route($reg->link) }}">Registration</a>
            
            @else
            <span style="color: #FF6F0F"> Registration</span>
            @endif
</h5>
            {{-- {!! $reg->text2 !!}
            {!! $reg->img1 !!}
            {!! $reg->text3 !!}
            {!! $reg->img2 !!}
            {!! $reg->text4 !!}
            {!! $reg->link !!} --}}
@break
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
@endsection