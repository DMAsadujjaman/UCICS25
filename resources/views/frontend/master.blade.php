<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UCICS24</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('public') }}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('public') }}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('public') }}/css/style.css" rel="stylesheet">

    <style>
        .countdown-container {
            display: flex;
        }

        .big-text {
            font-size: 4rem;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            min-height: 40vh;
        }

        .countdown-container span {
            display: block;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .countdown-container>div {
            margin: 0 2rem;
            text-align: center;
            border: 2px solid #000;
            padding: 0px 20px;
            border-radius: 12px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
            box-sizing: border-box;
            color: #000;
            min-width: 180px;
        }

        @media(max-width:992px) {
            .countdown-container>div {
                margin: 0 1rem;
            }
        }

        @media(max-width:767px) {
            .countdown-container {
                flex-wrap: wrap;
            }

            .countdown-container>div {
                margin: 1rem auto;
                max-width: 150px;
            }
        }
    </style>


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    @include('frontend.nav')

    @yield('content')

    @include('frontend.footer')



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public') }}/lib/wow/wow.min.js"></script>
    <script src="{{ asset('public') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('public') }}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('public') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('public') }}/lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('public') }}/js/main.js"></script>
    <script src="{{ asset('public') }}/js/countdown.js"></script>
</body>

</html>
