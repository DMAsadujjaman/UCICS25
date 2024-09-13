<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>UCICS24</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://vu.edu.bd/img/ico/favicon.ico">

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
        .navbar-nav .nav-item {
            margin-right: 0.5rem;
            /* Adjust the spacing as needed */
        }

        .navbar-nav .nav-link {
            font-size: 0.888rem;
            /* Adjust font size as needed */
        }

        .carousel-item img {
            height: 600px;
            /* Set your desired height */
            object-fit: cover;
        }

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
    {{-- <script src="{{ asset('public') }}/js/countdown.js"></script> --}}
 <script>

        let daysItem = document.querySelector("#days");
        let hoursItem = document.querySelector("#hours");
        let minItem = document.querySelector("#min");
        let secItem = document.querySelector("#sec");

        let formatNumber = (number) => {
            return number < 10 ? `0${number}` : `${number}`;
        };

        // Use a section to pass the future date from the child view
        let futureDate = new Date("{{ isset($futureDate) ? $futureDate : '' }}");

        if (futureDate) {
            let countdown = () => {
                let currentDate = new Date();
                let myDate = futureDate - currentDate;

                let days = Math.floor(myDate / 1000 / 60 / 60 / 24);
                let hours = Math.floor(myDate / 1000 / 60 / 60 ) % 24;
                let min = Math.floor(myDate / 1000 / 60 ) % 60;
                let sec = Math.floor(myDate / 1000) % 60;

                daysItem.innerHTML = formatNumber(days);
                hoursItem.innerHTML = formatNumber(hours);
                minItem.innerHTML = formatNumber(min);
                secItem.innerHTML = formatNumber(sec);
            }

            countdown();
            setInterval(countdown, 1000);
        } else {
            console.error("Future date is not set");
        }
    </script>

</body>

</html>