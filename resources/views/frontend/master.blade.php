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







    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <style>
        /* To position the second-level dropdown */
        /* Align the submenu correctly to the right */
        .dropdown-submenu .submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        .dropdown-submenu:hover .submenu {
            display: block;
        }



        .slider img {
            width: 100px;
            height: 100px;
            animation: scroll 20s linear infinite;
        }

        .slide-track {
            width: 100%;
            display: flex;
            gap: 2em;
            overflow: hidden;
        }

        .slider {
            padding: 2em 2em;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translatex(-1000%)
            }
        }

        /* 
        .partners {
            padding: 10px;
        }

        @-webkit-keyframes slideleft {
            0% {
                background-position: 385000px;
            }

            100% {
                background-position: 0;
            }
        }

        @keyframes slideleft {
            0% {
                background-position: 385000px;
            }

            100% {
                background-position: 0;
            }
        }

        .partners-img-container {
            height: 100px;
            width: 100%;
            overflow: auto;
        }

        .partners-img-container::-webkit-scrollbar {
            width: 0 !important;
        }

        /* hide scrollbar in Chrome */
        .partners-img-container {
            scrollbar-width: none;
        }

        /* hide scrollbar in mozilla */
        .partners-img-container {
            -ms-overflow-style: none;
        }

        /* hide scrollbar in IE */

        .partners-img-container .partners-img {
            height: 100%;
            width: 200%;
            background: transparent url(https://squeeze-pics.s3-us-west-2.amazonaws.com/v2/assets/Web+Assets/heroes/Auto-insurance/insurancelogos.jpg) repeat-x 50% 0;
            -webkit-animation: slideleft 5000s linear infinite;
            animation: slideleft 5000s linear infinite;
            cursor: grab;
        }

        */ .faq-header {
            font-size: 42px;
            border-bottom: 1px dotted #ccc;
            padding: 24px;
        }

        .faq-content {
            margin: 0 auto;
        }

        .faq-question {
            padding: 20px 0;
            border-bottom: 1px dotted #FF6F0F;
        }

        .panel-title {
            font-size: 24px;
            width: 100%;
            position: relative;
            margin: 0;
            margin-left: 10px;
            padding: 10px 10px 0 48px;
            display: block;
            cursor: pointer;
        }

        .panel-content {
            font-size: 20px;
            padding: 0px 14px;
            margin: 0 40px;
            height: 0;
            overflow: hidden;
            z-index: -1;
            position: relative;
            opacity: 0;
            -webkit-transition: .4s ease;
            -moz-transition: .4s ease;
            -o-transition: .4s ease;
            transition: .4s ease;
        }

        .panel:checked~.panel-content {
            height: auto;
            opacity: 1;
            padding: 14px;
        }

        .plus {
            position: absolute;
            color: #FF6F0F;
            margin-left: 20px;
            margin-top: 4px;
            z-index: 5;
            font-size: 42px;
            line-height: 100%;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            -webkit-transition: .2s ease;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            transition: .2s ease;
        }

        .panel:checked~.plus {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .panel {
            display: none;
        }






























        .container-fluid-carousel {
            width: 100%;
            padding: 0;
            margin: 0;
        }


        .owl-carousel .item {
            width: 100%;
            margin-top: 20px;
            /* Add margin to the top */
            margin-bottom: 20px;
            /* Add margin to the bottom */
        }

        .cardcontainer {
            width: 280px;
            height: 422px;
            display: flexbox;
            flex-direction: row;
            perspective: 800px;
        }

        .cardcontainer:hover>.card {
            cursor: pointer;
            transform: rotateY(180deg);
        }

        .card {
            height: 100%;
            width: 100%;
            position: relative;
            transition: transform 1500ms;
            transform-style: preserve-3d;
            border: none;
        }

        .front,
        .back {
            height: 100%;
            width: 100%;
            border-radius: 13px;
            box-shadow: 0 0 5px 2px rgba(50, 50, 50, 0.25);
            position: absolute;
            backface-visibility: hidden;
        }



        .back {
            background-color: whitesmoke;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: start;
            padding: 16px;
            gap: 5rem;
        }

        .back p {
            margin-top: 1px;
            text-align: justify;
        }
    </style>

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

        /* Include CSS Normalize */
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }



        a:hover {
            color: #FF6F0F;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            float: left;
            margin: 0 0 2em;
        }

        table thead {
            border-bottom: 3px solid #FF6F0F;
        }

        table thead th {
            padding: 0.35em 0 0.35em;
            font-weight: 400;
            text-align: left;

            font-size: 1.25em;
        }

        table tbody {
            border-bottom: 3px solid #FF6F0F;
        }

        table tbody tr {
            border-bottom: 2px solid #ddd;
        }

        table tbody tr td {
            padding: 0.75em 0;
        }

        table tbody tr td a {
            color: #FF6F0F;
            text-decoration: none;
            display: inline-block;
            margin: 0 0.5em 0 0;
        }

        table tbody tr td a:hover,
        table tbody tr td a:active,
        table tbody tr td a:focus {
            color: #006687;
            border: none;
        }

        table tfoot td {
            padding: 0.35em 0 0.35em;
            text-align: left;

            font-size: 1.25em;
        }

        @media screen and (min-width: 1000px) {
            table {
                width: 100%;
            }

            table thead {
                border-bottom: 3px solid #FF6F0F;
            }

            table tbody tr {
                border-bottom: 1px solid #ddd;
            }
        }

        #rwd-table {
            display: block;
        }

        #rwd-table tbody {
            border: none;
        }

        #rwd-table tbody,
        #rwd-table th,
        #rwd-table td,
        #rwd-table tr,
        #rwd-table tfoot {
            display: block;
        }

        #rwd-table thead {
            display: none;
        }

        #rwd-table tr {
            float: left;
            width: 100%;
            margin: 0 0 1em;
            border: 1px solid #ddd;
            box-shadow: 0px 2px 5px 0px #ddd;
            border-radius: 4px;
            border-top: 5px solid #FF6F0F;
        }

        #rwd-table tr td {
            padding: 0.5em 0.5em 0.5em 50%;
            float: left;
            width: 100%;
        }

        #rwd-table tr td:before {
            width: 100%;
            display: block;
            float: left;
            padding: 0.5em 0.5em 0.5em 0;
            clear: both;
            margin: -0.5em 0 0 -100%;

            font-size: 1.125em;
        }

        @media screen and (min-width: 600px) {
            #rwd-table {
                display: table;
                border: none;
            }

            #rwd-table tbody {
                border-bottom: 3px solid #FF6F0F;
            }

            #rwd-table th,
            #rwd-table td {
                display: table-cell;
            }

            #rwd-table tr {
                display: table-row;
                border: none;
                border-bottom: 1px solid #eee;
                float: none;
                margin: 0;
                box-shadow: none;
            }

            #rwd-table tr td {
                padding: 0.75em 0 0.75em 0.25em;
                float: none;
                width: auto;
            }

            #rwd-table tr td:before {
                padding: 0 !important;
            }

            #rwd-table thead {
                display: table-header-group;
            }

            #rwd-table tbody,
            #rwd-table tfoot {
                display: table-row-group;
            }

            #rwd-table tr:nth-of-type(odd) {
                background: #f8f9fa;
            }
        }

        #rwd-table-large {
            display: block;
        }

        #rwd-table-large tbody {
            border: none;
        }

        #rwd-table-large tbody,
        #rwd-table-large th,
        #rwd-table-large td,
        #rwd-table-large tr,
        #rwd-table-large tfoot {
            display: block;
        }

        #rwd-table-large thead {
            display: none;
        }

        #rwd-table-large tr {
            float: left;
            width: 100%;
            margin: 0 0 1em;
            border: 1px solid #ddd;
            box-shadow: 0px 2px 5px 0px #ddd;
            border-radius: 4px;
            border-top: 5px solid #FF6F0F;
        }

        #rwd-table-large tr td {
            padding: 0.5em 0.5em 0.5em 50%;
            float: left;
            width: 100%;
        }

        #rwd-table-large tr td:before {
            width: 100%;
            display: block;
            float: left;
            padding: 0.5em 0.5em 0.5em 0;
            clear: both;
            margin: -0.5em 0 0 -100%;

            font-size: 1.125em;
        }

        @media screen and (min-width: 1000px) {
            #rwd-table-large {
                display: table;
                border: none;
            }

            #rwd-table-large tbody {
                border-bottom: 3px solid #FF6F0F;
            }

            #rwd-table-large th,
            #rwd-table-large td {
                display: table-cell;
            }

            #rwd-table-large tr {
                display: table-row;
                border: none;
                border-bottom: 1px solid #eee;
                float: none;
                margin: 0;
                box-shadow: none;
            }

            #rwd-table-large tr td {
                padding: 0.75em 0 0.75em 0.25em;
                float: none;
                width: auto;
            }

            #rwd-table-large tr td:before {
                padding: 0 !important;
            }

            #rwd-table-large thead {
                display: table-header-group;
            }

            #rwd-table-large tbody,
            #rwd-table-large tfoot {
                display: table-row-group;
            }

            #rwd-table-large tr:nth-of-type(even) {
                background: #AE1700;
            }
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
                let hours = Math.floor(myDate / 1000 / 60 / 60) % 24;
                let min = Math.floor(myDate / 1000 / 60) % 60;
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
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20, // Adjust the gap between cards
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                },
                slideBy: 1, // Slide one card at a time
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
            });
        });
    </script>





</body>

</html>