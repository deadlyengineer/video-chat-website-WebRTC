<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('css/animate.css') }}">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/icofont.min.css')}}">
        <link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- ==========Header Section Starts Here========== -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="header-top-area">
                    <ul class="left">
                        <li>
                            <i class="icofont-ui-call"></i> <span>+800-123-4567 6587</span>
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i> Beverley, New York 224 USA
                        </li>
                    </ul>
                    <ul class="social-icons d-flex align-items-center">
                        <li>
                            <p>
                                Find us on :
                            </p>
                        </li>
                        <li>
                            <a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="vimeo"><i class="icofont-vimeo"></i></a>
                        </li>
                        <li>
                            <a href="#" class="skype"><i class="icofont-skype"></i></a>
                        </li>
                        <li>
                            <a href="#" class="rss"><i class="icofont-rss-feed"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="{{route('welcome')}}">
                            <img src="{{ url('images/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu" style="align-items: center;">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>

                            <li>
                                <a href="#0">Features</a>
                                <ul class="submenu">
                                    <li><a href="{{route('members')}}">All Members</a></li>
                                    <li><a href="{{route('profile')}}">Member Profile</a></li>
                                    <li><a href="{{route('pricing-plan')}}">Pricing Plan</a></li>
                                    <li><a href="{{route('404')}}">404 Page</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{route('active-group')}}">Community</a>
                            </li>
                            <li>
                                <a href="{{route('blog')}}">Blog</a>
                                <ul class="submenu">
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('blog-single')}}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                      </ul>
                            @auth
                            <form action="{{ route('logout') }}" method='post'>
                                @csrf
                                <button type="submit" style="border: none; padding:10px; display: inline-block; color: #df314d;
    border-radius: 2px 0 0 2px;"><i class="icofont-user"></i>LOG OUT</button>

                            </form>
                            @else
                            <a href="{{route('login')}}" class="login"><i class="icofont-user"></i> <span>LOG IN</span> </a>
                        <a href="{{route('register')}}" class="signup"><i class="icofont-users"></i> <span>SIGN UP</span> </a>
                            @endauth



                        <!-- toggle icons -->
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="ellepsis-bar d-lg-none">
                            <i class="icofont-info-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->


    <!-- ================ Banner Section start Here =============== -->
    <section class="banner-section">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <div class="intro-form">
                                <div class="intro-form-inner">
                                    <h3>Introducing TuruLav</h3>
                                    <p>Serious Dating With <strong>TuruLav </strong> Your Perfect
                                        Match is Just a Click Away.</p>
                                    <form action="/" class="banner-form">
                                        <div class="gender">
                                            <label for="gender" class="left">I am a </label>
                                            <div class="custom-select right">
                                                <select name="gender" id="gender" class="">
                                                    <option value="0">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="person">
                                            <label for="gender-two" class="left">Looking for</label>
                                            <div class="custom-select right">
                                                <select name="gender" id="gender-two" class="">
                                                    <option value="0">Select Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="age">
                                            <label for="age" class="left">Age</label>
                                            <div class="right d-flex justify-content-between">
                                                <div class="custom-select">
                                                    <select name="age-start" id="age">
                                                        <option value="1">18</option>
                                                        <option value="2">19</option>
                                                        <option value="3">20</option>
                                                        <option value="4">21</option>
                                                        <option value="5">22</option>
                                                        <option value="6">23</option>
                                                        <option value="7">24</option>
                                                        <option value="8">25</option>
                                                        <option value="9">26</option>
                                                        <option value="10">27</option>
                                                        <option value="11">28</option>
                                                        <option value="13">29</option>
                                                        <option value="14">30</option>
                                                    </select>
                                                </div>

                                                <div class="custom-select">
                                                    <select name="age-end" id="age-two">
                                                        <option value="1">18+</option>
                                                        <option value="2">19</option>
                                                        <option value="3">20</option>
                                                        <option value="4">21</option>
                                                        <option value="5">22</option>
                                                        <option value="6">23</option>
                                                        <option value="7">24</option>
                                                        <option value="8">25</option>
                                                        <option value="9">26</option>
                                                        <option value="10">27</option>
                                                        <option value="11">28</option>
                                                        <option value="13">29</option>
                                                        <option value="14">30</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="city">
                                            <label for="city" class="left">City</label>
                                            <input class="right" type="text" id="city" placeholder="Your City Name..">
                                        </div>
                                        <button class="">Find Your Partner</button>

                                    </form>
                                    <ul class="social-list">
                                        <li class="google"><a href="#">
                                                <img src="{{ url('images/banner/google.png') }}" alt="img">
                                                <span>Continue with google</span>
                                            </a></li>
                                        <li class="facebook"><a href="
                                            #">
                                                <i class="icofont-facebook"></i>
                                            </a></li>
                                        <li class="twitter"><a href="
                                            #">
                                                <i class="icofont-twitter"></i>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumb">
                            <img src="{{ url('images/banner/01.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-shapes">
            <img src="{{ url('images/banner/banner-shapes/01.png') }}" alt="shape" class="banner-shape shape-1">
            <img src="{{ url('images/banner/banner-shapes/02.png') }}" alt="shape" class="banner-shape shape-2">
            <img src="{{ url('images/banner/banner-shapes/03.png') }}" alt="shape" class="banner-shape shape-3">
            <img src="{{ url('images/banner/banner-shapes/04.png') }}" alt="shape" class="banner-shape shape-4">
            <img src="{{ url('images/banner/banner-shapes/05.png') }}" alt="shape" class="banner-shape shape-5">
            <img src="{{ url('images/banner/banner-shapes/06.png') }}" alt="shape" class="banner-shape shape-6">
            <img src="{{ url('images/banner/banner-shapes/07.png') }}" alt="shape" class="banner-shape shape-7">
            <img src="{{ url('images/banner/banner-shapes/08.png') }}" alt="shape" class="banner-shape shape-8">
        </div>
    </section>
    <!-- ================ Banner Section end Here =============== -->

    <section class="member-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">Meet New People Today!</h4>
                <h2>New Members in London</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-3 g-md-4">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" /images/member/01.jpg" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/02.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Gihan-Fernando</a></h6>
                                    <p>Active 2 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/03.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Sweet Admin</a></h6>
                                    <p>Active 3 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/04.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Gyan-Baffour</a></h6>
                                    <p>Active 5 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('images/member/05.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Teszt Eleking</a></h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="lab-item member-item style-1">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/06.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Zeahra Guido</a>
                                    </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="member-button-group d-flex flex-wrap justify-content-center">
                    <a href="signup.html" class="lab-btn"><i class="icofont-users"></i> <span>Join Us for
                            Free</span></a>
                    <a href="login.html" class="lab-btn"><i class="icofont-play-alt-1"></i> <span>Our tv
                            commercial</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Member Section end Here =============== -->


    <!-- ================ About Section start Here =============== -->
    <section class="about-section padding-tb bg-img">
        <div class="container">
            <div class="section-header">
                <h4>About Our Turulav</h4>
                <h2>It All Starts With A Date</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/about/01.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,991</h2>
                                    <p>Members in Total</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/about/02.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,960</h2>
                                    <p>Members Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/about/03.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">29,960</h2>
                                    <p>Men Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                        <div class="lab-item about-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                <img src=" {{url('images/about/04.png')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h2 class="counter">28,960</h2>
                                    <p>Women Online</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ About Section end Here =============== -->


    <!-- ================ Work Section start Here =============== -->
    <section class="work-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">How Does It Work?</h4>
                <h2>You’re Just 3 Steps Away From A Great Date</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-5">
                    <div class="col-lg-4 col-sm-6 col-12 px-4">
                        <div class="lab-item work-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <div class="thumb-inner">
                                        <img src=" {{url('images/work/01.png')}}" alt="work-img">
                                        <div class="step">
                                            <span>step</span>
                                            <p>01</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lab-content">
                                    <h4>Create A Profile</h4>
                                    <p>Continua actualize ailers through robu
                                        and sertively concepze standards compliant
                                        commerce after technica sound.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 px-4">
                        <div class="lab-item work-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <div class="thumb-inner">
                                        <img src=" {{url('images/work/02.png')}}" alt="work-img">
                                        <div class="step">
                                            <span>step</span>
                                            <p>02</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lab-content">
                                    <h4>Find Matches</h4>
                                    <p>Continua actualize ailers through robu
                                        and sertively concepze standards compliant
                                        commerce after technica sound.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 px-4">
                        <div class="lab-item work-item">
                            <div class="lab-inner text-center">
                                <div class="lab-thumb">
                                    <div class="thumb-inner">
                                        <img src=" {{url('images/work/03.png')}}" alt="work-img">
                                        <div class="step">
                                            <span>step</span>
                                            <p>03</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="lab-content">
                                    <h4>Start Dating</h4>
                                    <p>Continua actualize ailers through robu
                                        and sertively concepze standards compliant
                                        commerce after technica sound.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Work Section end Here =============== -->



    <!-- ================ Success Story Section start Here =============== -->
    <section class="story-section padding-tb bg-img">
        <div class=" container">
            <div class="section-header">
                <h4>Love in Faith Success Stories</h4>
                <h2>Sweet Stories From Our Lovers</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="story-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/story/01.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4><a href="{{route('blog-single')}}">Image Post Formate</a></h4>
                                    <p>Seamlesly evolve unique web-readiness with
                                        Collabors atively fabricate best of breed and
                                        apcations through </p>
                                    <a href="{{route('blog-single')}}" class="lab-btn"><i class="icofont-circled-right"></i>
                                        Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="story-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/story/02.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4><a href="{{route('blog-single')}}">Couple Of Month</a></h4>
                                    <p>Seamlesly evolve unique web-readiness with
                                        Collabors atively fabricate best of breed and
                                        apcations through </p>
                                    <a href="{{route('blog-single')}}" class="lab-btn"><i class="icofont-circled-right"></i>
                                        Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="story-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/story/03.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4><a href="{{route('blog-single')}}">Media For Blog Article</a></h4>
                                    <p>Seamlesly evolve unique web-readiness with
                                        Collabors atively fabricate best of breed and
                                        apcations through </p>
                                    <a href="{{route('blog-single')}}" class="lab-btn"><i class="icofont-circled-right"></i>
                                        Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Success Story Section end Here =============== -->


    <!-- ================ Top Member Section start Here =============== -->
    <section class="top-member-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">Top Members</h4>
                <h2>Turulav Members Online Now</h2>
            </div>
            <div class="section-wrapper">
                <ul class="button-group filters-button-group w-100 d-flex flex-wrap justify-content-center">
                    <li class="button is-checked filter-btn" data-filter="*"><i class="icofont-heart-alt"></i> Show all
                    </li>
                    <li class="button filter-btn" data-filter=".girl"><i class="icofont-girl"></i> new girl
                        member</li>
                    <li class="button filter-btn" data-filter=".boy"><i class="icofont-hotel-boy"></i> New
                        Boy Member</li>
                </ul>

                <div class="grid-memberlist">
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/01.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Johanna</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/03.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Selinae</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/02.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/04.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Rocky deo</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/05.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Jhon doe</a> </h6>
                                    <p>Active 5 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/06.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Angelina</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/07.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Andrea Guido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/08.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Jene Aiko</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item girl">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/09.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Anna haek</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-member filter-item boy">
                        <div class="lab-item member-item style-1 style-2">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/member/10.jpg')}}" alt="member-img">
                                </div>
                                <div class="lab-content">
                                    <h6><a href="{{route('profile')}}">Andrean Puido</a> </h6>
                                    <p>Active 1 Day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Top Member Section end Here =============== -->


    <!-- ================ Active Group Section Start Here =============== -->
    <section class="group-section padding-tb bg-img">
        <div class="container">
            <div class="section-header">
                <h4>Recently Active Groups</h4>
                <h2>Turulav 4 Best Active Group</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4">
                    <div class="col-xl-6 col-12">
                        <div class="group-item lab-item">
                            <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                <div class="lab-thumb me-sm-4 mb-4 mb-sm-0">
                                    <img src=" {{('images/group/01.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4>Active Group A1</h4>
                                    <p>Colabors atively fabcate best breed and
                                        apcations through visionary value </p>
                                    <ul class="img-stack d-flex">
                                        <li><img src=" {{url('images/group/group-mem/01.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/02.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/03.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/04.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/05.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/06.png')}}" alt="member-img"></li>
                                        <li class="bg-theme">12+</li>
                                    </ul>
                                    <div class="test"> <a href="{{route('active-group')}}" class="lab-btn"> <i
                                                class="icofont-users-alt-5"></i>View Group</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="group-item lab-item">
                            <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                <div class="lab-thumb me-sm-4 mb-4 mb-sm-0">
                                    <img src=" {{url('images/group/02.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4>Active Group A2</h4>
                                    <p>Colabors atively fabcate best breed and
                                        apcations through visionary value </p>
                                    <ul class="img-stack d-flex">
                                        <li><img src=" {{url('images/group/group-mem/01.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/02.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/03.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/04.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/05.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/06.png')}}" alt="member-img"></li>
                                        <li class="bg-theme">12+</li>
                                    </ul>
                                    <div class="test"> <a href="{{route('active-group')}}" class="lab-btn"> <i
                                                class="icofont-users-alt-5"></i>View Group</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="group-item lab-item">
                            <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                <div class="lab-thumb me-sm-4 mb-4 mb-sm-0">
                                    <img src=" {{url('images/group/03.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4>Active Group A3</h4>
                                    <p>Colabors atively fabcate best breed and
                                        apcations through visionary value </p>
                                    <ul class="img-stack d-flex">
                                        <li><img src=" {{url('images/group/group-mem/01.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/02.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/03.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/04.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/05.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/06.png')}}" alt="member-img"></li>
                                        <li class="bg-theme">12+</li>
                                    </ul>
                                    <div class="test"> <a href="{{route('active-group')}}" class="lab-btn"> <i
                                                class="icofont-users-alt-5"></i>View Group</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="group-item lab-item">
                            <div class="lab-inner d-flex flex-wrap align-items-center p-4">
                                <div class="lab-thumb me-sm-4 mb-4 mb-sm-0">
                                    <img src=" {{url('images/group/04.jpg')}}" alt="img">
                                </div>
                                <div class="lab-content">
                                    <h4>Active Group A4</h4>
                                    <p>Colabors atively fabcate best breed and
                                        apcations through visionary value </p>
                                    <ul class="img-stack d-flex">
                                        <li><img src=" {{url('images/group/group-mem/01.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/02.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/03.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/04.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/05.png')}}" alt="member-img"></li>
                                        <li><img src=" {{url('images/group/group-mem/06.png')}}" alt="member-img"></li>
                                        <li class="bg-theme">12+</li>
                                    </ul>
                                    <div class="test"> <a href="{{route('active-group')}}" class="lab-btn"> <i
                                                class="icofont-users-alt-5"></i>View Group</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Active Group Section end Here =============== -->


    <!-- ================ Review Section start Here =============== -->
    <section class="clints-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">What our Customers Say</h4>
                <h2>Client’s Feed back Latest Reviews
                    From My Clients</h2>
            </div>
            <div class="section-wrapper">
                <div class="clients">
                    <div class="client-list">
                        <div class="client-content">
                            <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was
                                Procedur Arramin</p>
                            <div class="client-info">
                                <div class="name-desi">
                                    <h6>Marin Chapla</h6>
                                    <span>UI Designer</span>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client-thumb">
                            <img src=" {{url('images/group/group-mem/02.png')}}" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was
                                Procedur Arramin</p>
                            <div class="client-info">
                                <div class="name-desi">
                                    <h6>Nandita Rani</h6>
                                    <span>Digital Marketor</span>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client-thumb">
                            <img src="{{url('images/group/group-mem/01.png')}}" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was
                                Procedur Arramin</p>
                            <div class="client-info">
                                <div class="name-desi">
                                    <h6>Sunil Borua</h6>
                                    <span>UX Designer</span>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client-thumb">
                            <img src=" {{url('images/group/group-mem/03.png')}}" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was
                                Procedur Arramin</p>
                            <div class="client-info">
                                <div class="name-desi">
                                    <h6>Zinat Zaara</h6>
                                    <span>Web Designer</span>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client-thumb">
                            <img src=" {{url('images/group/group-mem/04.png')}}" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was
                                Procedur Arramin</p>
                            <div class="client-info">
                                <div class="name-desi">
                                    <h6><a href="{{route('profile')}}">Somrat Islam </a></h6>
                                    <span>UI Designer</span>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client-thumb">
                            <img src=" {{url('images/group/group-mem/05.png')}}" alt="lab-clients">
                        </div>
                    </div>
                    <div class="client-list">
                        <div class="client-content">
                            <p>Drama enable wordwide action team whereProcedu Aran Manu Produc Raher ConveneMotin Was
                                Procedur Arramin</p>
                            <div class="client-info">
                                <div class="name-desi">
                                    <h6>Junaid Khan</h6>
                                    <span>Font-End-Devoloper</span>
                                </div>
                                <div class="rating">
                                    <ul>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                        <li><i class="icofont-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="client-thumb">
                            <img src=" {{url('images/group/group-mem/06.png')}}" alt="lab-clients">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ Review Section end Here =============== -->


    <!-- ================ App Section start Here =============== -->
    <section class="app-section bg-theme">
        <div class="container">
            <div class="section-wrapper padding-tb">
                <div class="app-content">
                    <h4>Download App Our Turulav</h4>
                    <h2>Easy Connect to Everyone</h2>
                    <p>You find us, finally, and you are already in love. More than 5.000.000 around
                        the world already shared the same experience andng ares uses our system
                        Joining us today just got easier!</p>
                    <ul class="app-download d-flex flex-wrap">
                        <li><a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src=" {{url('images/app/apple.png')}}" alt="apple">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>App Store</h4>
                                </div>
                            </a></li>
                        <li class="d-inline-block"><a href="#" class="d-flex flex-wrap align-items-center">
                                <div class="app-thumb">
                                    <img src=" {{url('images/app/playstore.png')}}" alt="playstore">
                                </div>
                                <div class="app-content">
                                    <p>Available on the</p>
                                    <h4>Google Play</h4>
                                </div>
                            </a></li>
                    </ul>

                </div>
                <div class="mobile-app">
                    <img src=" {{url('images/app/mobile-view.png')}}" alt="mbl-view">
                </div>
            </div>
        </div>
    </section>
    <!-- ================ App Section end Here =============== -->


    <!-- ================ footer Section start Here =============== -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/footer/icons/01.png')}}" alt="Phone-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Phone Number : +88019 339 702 520</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/footer/icons/02.png')}}" alt="email-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Email : admin@turulav.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src=" {{url('images/footer/icons/03.png')}}" alt="location-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Address : 30 North West New York 240</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-tb" style="background-image: url({{url('images/footer/bg.png')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>About TuruLav</h4>
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-4">Energistically coordinate highly efficient procesr
                                        partnerships befor revolutionar growth strategie
                                        improvement viaing awesome</p>
                                    <img src=" {{url('images/footer/about.jpg')}}" alt="about-image" class="footer-abt-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>our Recent news</h4>
                                </div>
                                <div class="fm-item-content">
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"> <img src=" {{url('images/footer/01.jpg')}}"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{route('blog-single')}}">Enable Seamin Matera Forin And Our
                                                        Orthonal Create Vortals.</a></h6>
                                                <p>July 23, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"><img src=" {{url('images/footer/02.jpg')}}"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{route('blog-single')}}">Dynamca Network Otuitive Catays For
                                                        Plagiarize Mindshare After</a></h6>
                                                <p>July 23, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fm-item-widget lab-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#"><img src="{{url('images/footer/03.jpg')}}"
                                                        alt="footer-widget-img"></a>
                                            </div>
                                            <div class="lab-content">
                                                <h6><a href="{{route('blog-single')}}">Dynamca Network Otuitive Catays For
                                                        Plagiarize Mindshare After</a></h6>
                                                <p>July 23, 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>Our Newsletter Signup</h4>
                                </div>
                                <div class="fm-item-content">
                                    <p>By subscribing to our mailing list you will always
                                        be update with the latest news from us.</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email">
                                        </div>
                                        <button type="submit" class="lab-btn">Send Massage <i
                                                class="icofont-paper-plane"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2021 <a href="{{route('welcome')}}">TuruLav</a> -Best For Dating HTML Template.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ footer Section end Here =============== -->



    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->

    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('js/waypoints.min.js') }}"></script>
    <script src="{{ url('js/swiper.min.js') }}"></script>
    <script src="{{ url('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('js/functions.js')}}"></script>


            </div>
        </div>
    </body>
</html>
