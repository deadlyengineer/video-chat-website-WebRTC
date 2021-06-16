<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- x-icon -->
   <link rel="shortcut icon" href="{{url('images/x-icon.png')}}" type="image/x-icon">

<!-- Other css -->
<link rel="stylesheet" href="{{url('css/animate.css')}}">
<link rel="stylesheet" href="{{url('css/bootstrap.min.cs')}}s">
<link rel="stylesheet" href="{{url('css/icofont.min.css')}}">
<link rel="stylesheet" href="{{url('css/swiper.min.css')}}">
<link rel="stylesheet" href="{{url('css/style.css')}}">

    <title>TuruLav</title>
</head>

<body>
    <!-- preloader start here -->
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
                            <img src="images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu-area">
                        <ul class="menu">
                            <li>
                                <a href="{{route('welcome')}}">Home</a>
                            </li>

                            <li>
                                <a href="#0">Features</a>
                                <ul class="submenu">
                                    <li><a href="{{route('members')}}">All Members</a></li>
                                    <li><a href="{{route('profile')}}">Member Profile</a></li>
                                    <li><a href="{{route('pricing-plan')}}" class="active">Pricing Plan</a></li>
                                    <li><a href="{{route('404')}}">404 Page</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="{{route('active-group')}}">Community</a>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="submenu">
                                    <li><a href="{{route('blog')}}">Blog</a></li>
                                    <li><a href="{{route('blog-single')}}">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
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

    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1" style="background:url({{url('images/page-header.jpg')}})">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Membership Level</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li class="active">Membership-level</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========pricing plan Section Start Here========== -->
    <section class="pricing-section padding-tb">
        <div class="container">
            <div class="section-header">
                <h4 class="theme-color">Membership Levels</h4>
                <h2>Choose Our Pricing Plan</h2>
            </div>
            <div class="section-wrapper mt-4">
                <div class="pricing-plan-wrapper">
                    <div class="row gx-2 gy-3 justify-content-center">
                        <div class="col-lg-4 col-sm-6">
                            <div class="price-item">
                                <div class="price-item-inner">
                                    <div class="price-top">
                                        <h6>Basic Package</h6>
                                        <h2>$29.00</h2>
                                        <p>$29.00 Now And Then $90.00
                                            Per Month.</p>
                                    </div>
                                    <div class="price-bottom">
                                        <ul>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View members directory</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View members profile</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Access group directory</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Access to groups</p>
                                            </li>
                                            <li><i class="icofont-close-circled"></i>
                                                <p>View site activity</p>
                                            </li>
                                            <li><i class="icofont-close-circled"></i>
                                                <p>Send Private messages</p>
                                            </li>
                                            <li><i class="icofont-close-circled"></i>
                                                <p>Add media to your profile</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="purchase-btn">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="price-item">
                                <div class="price-item-inner">
                                    <div class="price-top">
                                        <h6>Silver Package</h6>
                                        <h2>$290.00</h2>
                                        <p>$290.00 Now And Then $390.00
                                            Per Month.</p>
                                    </div>
                                    <div class="price-bottom">
                                        <ul>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View members directory</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View members profile</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Access group directory</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Access to groups</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View site activity</p>
                                            </li>
                                            <li><i class="icofont-close-circled"></i>
                                                <p>Send Private messages</p>
                                            </li>
                                            <li><i class="icofont-close-circled"></i>
                                                <p>Add media to your profile</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="purchase-btn">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="price-item">
                                <div class="price-item-inner">
                                    <div class="price-top">
                                        <h6>Gold Package</h6>
                                        <h2>$390.00</h2>
                                        <p>$390.00 Now And Then $490.00
                                            Per Month.</p>
                                    </div>
                                    <div class="price-bottom">
                                        <ul>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View members directory</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View members profile</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Access group directory</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Access to groups</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>View site activity</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Send Private messages</p>
                                            </li>
                                            <li><i class="icofont-check-circled"></i>
                                                <p>Add media to your profile</p>
                                            </li>
                                        </ul>
                                        <a href="#" class="purchase-btn">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ==========pricing plan Section Ends Here========== -->


    <!-- ================ footer Section start Here =============== -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{url('images/footer/icons/01.png')}}" alt="Phone-icon">
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
                                    <img src="{{url('images/footer/icons/02.png')}}" alt="email-icon">
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
                                    <img src="{{url('images/footer/icons/03.png')}}" alt="location-icon">
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
                                    <img src="{{url('images/footer/about.jpg')}}" alt="about-image" class="footer-abt-img">
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
                                                <a href="#"> <img src="{{url('images/footer/01.jpg')}}"
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
                                                <a href="#"><img src="{{url('images/footer/02.jpg')}}"
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




    <!-- All Scripts -->
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ url('js/waypoints.min.js') }}"></script>
    <script src="{{ url('js/swiper.min.js') }}"></script>
    <script src="{{ url('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('js/wow.min.js') }}"></script>
    <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('js/functions.js')}}"></script>
</body>

</html>
