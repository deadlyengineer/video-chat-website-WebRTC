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
                            <img src="{{url('images/logo/logo.png')}}" alt="logo">
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
                                    <li><a href="{{route('pricing-plan')}}">Pricing Plan</a></li>
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
                                    <li><a href="{{route('blog-single')}}" class="active">Blog Single</a></li>
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
                        <h2>TuruLav Blog</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li class="active">Blog Deatils</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->

    <!-- ==========Blog Section start Here========== -->
    <section class="blog-section padding-tb pb-lg-110">
        <div class="container">
            <div class="main-blog">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="blog-wrapper">
                            <div class="post-item">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <img src="{{url('images/blog/03.jpg')}}" alt="blog">
                                    </div>
                                    <div class="post-content">
                                        <span class="meta">By <a href="#">Admin</a> March 24, 2021</span>
                                        <h3>A wonderf serenity has taken poesion of my entire souin like these sweet
                                            mornins</h3>
                                        <p>A wonderf serenity has taken poesion of my entire souin like these sweet
                                            mornins sprin which enjy with my whole hear I am alone and feel the charm
                                            of existen spot which was creatie For the blisse of souls like mineingi am
                                            so
                                            happy my dear friend, so absoribed in the exquisite sense tranquilera
                                            existence, that I neglect my talentsri I should bye incapable of drawin and
                                            sinle stroke A wonderful serenity has taken possession of my entire souing
                                            like these sweet mornins sprng enjoy with mye whole heart. I am alone, and
                                            feel the charm of existthis spot which was creatied the bliss of souls like
                                            mineingi am so happy my dear friend, so absoribed in the exquisite sense
                                            tranquil existnce, dt I neglect my talentsri I should bye incapable of
                                            drawin and single stroke enjoy with my whole hrt. I am alone, and feel the
                                            charm of existencethis spot which was For the bliss of souls like mineingis
                                            am so happy my dear friend, so absoribed in the exquisite sense tranquil
                                            existence, that I neglects my talentsri I should bye incapable of drawing
                                            and
                                            single the present moment; and yet If feel that I never was a greater artst

                                        </p>
                                        <blockquote>
                                            <p>Steal into The inner Sanc Thro Myse Down Amon The Hall Gras Buzz The
                                                Little World Amon The Staks And Grow Famar With Count And Fies Then
                                                The Presence of The Almighty Among The Staks </p>
                                        </blockquote>
                                        <p>A wonderf serenity has taken poesion of my entire souin like these sweet
                                            mornins sprin which enjy with my whole hear I am alone and feel the charm
                                            of existen spot which was creatie For the blisse of souls like mineingi am
                                            so
                                            happy my dear friend, so absoribed in the exquisite sense tranquilera
                                            existence, that I neglect my talentsri I should bye incapable of drawin and
                                            sinle stroke A wonderful serenity has taken possession of my entire souing
                                            like these sweet mornins sprng enjoy with mye whole heart. I am alone, and
                                            feel the charm of existthis spot which was creatied the bliss of souls like
                                            mineingi am so happy my dear friend, so absoribed in the exquisite sense
                                            tranquil existnce, dt I neglect my talentsri I should bye incapable of
                                            drawin and single stroke enjoy with my whole hrt. I am alone, and feel the
                                            charm of existencethis spot which was For the bliss.
                                        </p>
                                    </div>
                                    <div class="tags-section">
                                        <ul class="tags">
                                            <li><span><i class="icofont-tags"></i></span></li>
                                            <li><a href="#">Dantal</a></li>
                                            <li><a href="#">Health Care</a></li>
                                            <li><a href="#">Company</a></li>
                                            <li><a href="#">Corporate</a></li>
                                        </ul>
                                        <ul class="social-link-list d-flex flex-wrap">
                                            <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                            <li><a href="#" class="dribble"><i class="icofont-dribble"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="comments" class="comments">
                                <div class="widget-title">
                                    <h3>02 Comments</h3>
                                </div>
                                <ul class="comment-list">
                                    <li class="comment" id="li-comment-2">
                                        <div class="com-image">
                                            <img alt="" src="{{url('images/member/02.jpg')}}" class="avatar avatar-90 photo"
                                                height="90" width="90">
                                        </div>
                                        <div class="com-content">
                                            <div class="com-title">
                                                <div class="com-title-meta">
                                                    <h4><a href="#" rel="external nofollow" class="url">Rassel
                                                            Hossain</a></h4>
                                                    <span> October 5, 2021 at 12:41 pm </span>
                                                </div>
                                                <span class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="#"><i
                                                            class="icofont-reply-all"></i>
                                                        Reply</a>
                                                </span>
                                            </div>
                                            <p>The inner sanctuary, I throw myself down among the tall grass bye the
                                                trckli stream and, as I lie close to the earth</p>
                                        </div>
                                        <ul class="comment-list">
                                            <li class="comment even thread-even depth-1 comment" id="li-comment-3">
                                                <div class="com-image">
                                                    <img alt="" src="{{url('images/member/03.jpg')}}"
                                                        class="avatar avatar-90 photo" height="90" width="90">
                                                </div>
                                                <div class="com-content">
                                                    <div class="com-title">
                                                        <div class="com-title-meta">
                                                            <h4><a href="http://Sk" rel="external nofollow"
                                                                    class="url">William Khanna</a></h4>
                                                            <span> October 5, 2021 at 12:41 pm </span>
                                                        </div>
                                                        <span class="reply">
                                                            <a rel="nofollow" class="comment-reply-link" href="#"><i
                                                                    class="icofont-reply-all"></i> Reply</a>
                                                        </span>
                                                    </div>
                                                    <p>A wonderful serenity has taken possession of my entire soul, like
                                                        these sweet mornings spring which I enjoy with my whole heart
                                                    </p>
                                                    <div class="reply-btn">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div id="respond" class="comment-respond">
                                <div class="add-comment">
                                    <div class="widget-title">
                                        <h3>Leave a Comment</h3>
                                    </div>
                                    <form action="#" method="post" id="commentform" class="comment-form" novalidate="">
                                        <input class="comment-input" name="author" type="text" value=""
                                            placeholder="Full Name">
                                        <input class="comment-input" name="email" type="text" value=""
                                            placeholder="Your Email">
                                        <input class="comment-input subject w-100" name="url" type="text" value=""
                                            placeholder="Subject">
                                        <textarea class="comment-input" id="comment-reply" name="comment" cols="45"
                                            rows="5" placeholder="Type Here Message" aria-required="true"></textarea>
                                        <button class="lab-btn" type="submit"><span>Send Comment</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <aside class="mt-5 mt-lg-0">
                            <div class="widget search-widget">
                                <div class="widget-inner">
                                    <div class="widget-title">
                                        <h5>Filter Search Member</h5>
                                    </div>
                                    <div class="widget-content">
                                        <p>Serious Dating With TuruLav Your Perfect
                                            Match is Just a Click Away.</p>
                                        <form action="/" class="banner-form">
                                            <div class="gender">
                                                <div class="custom-select right w-100">
                                                    <select name="gender" id="gender" class="">
                                                        <option value="0">I am a </option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="person">
                                                <div class="custom-select right w-100">
                                                    <select name="gender" id="gender-two" class="">
                                                        <option value="0">Looking for</option>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                        <option value="3">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="age">
                                                <div class="right d-flex justify-content-between w-100">
                                                    <div class="custom-select">
                                                        <select name="age-start" id="age">
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

                                                    <div class="custom-select">
                                                        <select name="age-end" id="age-two">
                                                            <option value="1">36</option>
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
                                                <div class="custom-select right w-100">
                                                    <select name="country" id="country" class="">
                                                        <option value="0">Choose Your Country
                                                        </option>
                                                        <option value="1">USA</option>
                                                        <option value="2">UK</option>
                                                        <option value="3">Spain</option>
                                                        <option value="4">Brazil</option>
                                                        <option value="5">France</option>
                                                        <option value="6">Newzeland</option>
                                                        <option value="7">Australia</option>
                                                        <option value="8">Bangladesh</option>
                                                        <option value="9">Turki</option>
                                                        <option value="10">Chine</option>
                                                        <option value="11">India</option>
                                                        <option value="12">Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="interest">
                                                <div class="custom-select right w-100">
                                                    <select name="country" id="interest" class="">
                                                        <option value="0">Your Interests
                                                        </option>
                                                        <option value="1">Gaming</option>
                                                        <option value="2">Fishing</option>
                                                        <option value="3">Skydriving</option>
                                                        <option value="4">Swimming</option>
                                                        <option value="5">Racing</option>
                                                        <option value="6">Hangout</option>
                                                        <option value="7">Tranvelling</option>
                                                        <option value="8">Camping</option>
                                                        <option value="9">Touring</option>
                                                        <option value="10">Acting</option>
                                                        <option value="11">Dancing</option>
                                                        <option value="12">Singing</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="">Find Your Partner</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="widget like-member">
                                <div class="widget-inner">
                                    <div class="widget-title">
                                        <h5>you may like</h5>
                                    </div>
                                    <div class="widget-content">
                                        <div class="row row-cols-3 row-cols-sm-auto g-3">
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/01.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/02.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/03.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/04.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/05.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/06.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/07.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/08.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="image-thumb">
                                                    <a href="#">
                                                        <img src="{{url('images/widget/09.jpg')}}" alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget active-group">
                                <div class="widget-inner">
                                    <div class="widget-title">
                                        <h5>join the group</h5>
                                    </div>
                                    <div class="widget-content">
                                        <div class="group-item lab-item">
                                            <div class="lab-inner d-flex flex-wrap align-items-center">
                                                <div class="lab-content w-100">
                                                    <h6>Active Group A1</h6>
                                                    <p>Colabors atively fabcate best breed and
                                                        apcations through visionary</p>
                                                    <ul class="img-stack d-flex">
                                                        <li><img src="{{url('images/group/group-mem/01.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/02.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/03.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/04.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/05.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/06.png')}}"
                                                                alt="member-img"></li>
                                                        <li class="bg-theme">12+</li>
                                                    </ul>
                                                    <div class="test"> <a href="{{route('profile')}}" class="lab-btn"><i
                                                                class="icofont-users-alt-5"></i> View Group</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group-item lab-item">
                                            <div class="lab-inner d-flex flex-wrap align-items-center">
                                                <div class="lab-content w-100">
                                                    <h6>Active Group A2</h6>
                                                    <p>Colabors atively fabcate best breed and
                                                        apcations through visionary</p>
                                                    <ul class="img-stack d-flex">
                                                        <li><img src="{{url('images/group/group-mem/01.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/02.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/03.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/04.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/05.png')}}"
                                                                alt="member-img"></li>
                                                        <li><img src="{{url('images/group/group-mem/06.png')}}"
                                                                alt="member-img"></li>
                                                        <li class="bg-theme">16+</li>
                                                    </ul>
                                                    <div class="test"> <a href="{{route('profile')}}" class="lab-btn"> <i
                                                                class="icofont-users-alt-5"></i>View Group</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog Section ends Here========== -->


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
