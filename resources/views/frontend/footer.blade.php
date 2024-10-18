<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                {{-- <h1 class="fw-bold text-primary mb-4">UCICS<span class="text-white">24</span></h1> --}}
                <img src="{{ asset('public/img/') . $contacts->logo}}" alt="UCICS24 Logo" class="img-fluid" style="height: 90px;">
                <p>{{$contacts->aboutlogo}}</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square me-1" href="{{$contacts->fb}}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square me-1" href="{{$contacts->youtube}}"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square me-0" href="{{$contacts->insta}}"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" id="ftr">
                <h5 class="text-light mb-4">Conference Venue</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{$contacts->address}}</p>
                <p><i class="fa fa-phone-alt me-3"></i>{{$contacts->mobile}}</p>
                <p><i class="fa fa-envelope me-3"></i>{{$contacts->email}}</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-light mb-4">Map</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d512.5297449558728!2d88.64515338963808!3d24.399450107472113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbefb6afccfcd5%3A0x39656bbb38ffc96a!2sDepartment%20of%20CSE%2C%20Varendra%20University!5e1!3m2!1sen!2sbd!4v1727446687906!5m2!1sen!2sbd"
                    width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{--  {!! $contacts->map !!}  --}}
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    {!! $contacts->rights!!}
                </div>
                <div class="col-md-6 text-center text-md-end">


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
