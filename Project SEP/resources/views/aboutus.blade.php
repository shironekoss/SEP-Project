<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>selenium ramen</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('desain/css/Gchoco/bootstrap.min.css') }}">
    <!-- style css -->
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('desain/css/Gchoco/style.css') }}">
    <!-- Responsive-->
    {{-- <link rel="stylesheet" href="css/responsive.css"> --}}
    <link rel="stylesheet" href="{{ asset('desain/css/Gchoco/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/selenium/Loadingselenium.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <div class="wrapper">
        <!-- Sidebar -->
        @include('home.sidebar')
        <div id="content">
            @include('home.homecarousel')
        </div>
    </div>
    <!-- end header -->
    <!-- orders section -->

                        {{-- untuk home --}}


    <!-- end orders section -->
    <!-- products -->
    <div class="products croos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>FEATURED PRODUCTS</h2>
                        <p>long established fact that a reader will be distracted by the readable content </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="three_cho text_align_center">
                        <figure><img src="{{ asset('images/gchoco/por1.png') }}" alt="#" /></figure>
                        <div class="cho_text">
                            <h3>BIRTHDAY CHOCLATE</h3>
                            <span>$ 300.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three_cho text_align_center">
                        <figure><img src="{{ asset('images/gchoco/por2.png') }}" alt="#" /></figure>
                        <div class="cho_text">
                            <h3>BIRTHDAY CHOCLATE</h3>
                            <span>$ 300.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three_cho text_align_center">
                        <figure><img src="{{ asset('images/gchoco/por3.png') }}" alt="#" /></figure>
                        <div class="cho_text">
                            <h3>BIRTHDAY CHOCLATE</h3>
                            <span>$ 300.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="bar_buy text_align_center">
                        <div class="cho_text">
                            <span>$ 300.0</span>
                            <h3>CHOCLATE BAR</h3>
                            <a class="read_more" href="Javascript:void(0)">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three_cho birth  text_align_center">
                        <figure><img src="{{ asset('images/gchoco/por4.png') }}" alt="#" /></figure>
                        <div class="cho_text">
                            <h3>BIRTHDAY CHOCLATE</h3>
                            <span>$ 300.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three_cho birth  text_align_center">
                        <figure><img src="{{ asset('images/gchoco/por5.png') }}" alt="#" /></figure>
                        <div class="cho_text">
                            <h3>BIRTHDAY CHOCLATE</h3>
                            <span>$ 300.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="three_cho birth  text_align_center">
                        <figure><img src="{{ asset('images/gchoco/por4.png') }}" alt="#" /></figure>
                        <div class="cho_text">
                            <h3>BIRTHDAY CHOCLATE</h3>
                            <span>$ 300.0</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="read_more see_nore" href="Javascript:void(0)">SEE MORE</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end products -->
    <!-- choclate -->
    <div class="choclate">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="choclate_img">
                        <h3>UPCOMING</h3>
                        <figure><img src="{{ asset('images/gchoco/choclate_img.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>NEW CHOCOLATE COLLECTION</h2>
                        <span>A brand New Collection on your way...</span>
                        <a class="read_more" href="Javascript:void(0)">SHOP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- choclate -->
    <!-- customers section -->
    <div class="customers croos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>What Is Says Our Customers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide customers_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="customers_box">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="customers_pro">
                                                        <figure><img src="{{ asset('images/gchoco/test_pro.png') }}"
                                                                alt="#" /></figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="cos_text text_align_left">
                                                        <h3>DIANA MORJU</h3>
                                                        <p>using 'Content here, content here', making it look like
                                                            readable English. Many desktop publishing packages and web
                                                            page editors now use Lorem Ipsum as their default model
                                                            text, and a search <img
                                                                src="{{ asset('images/gchoco/icon.png') }}"
                                                                alt="#" /></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="customers_box">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="customers_pro">
                                                        <figure><img src="{{ asset('images/gchoco/test_pro.png') }}"
                                                                alt="#" /></figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="cos_text text_align_left">
                                                        <h3>DIANA MORJU</h3>
                                                        <p>using 'Content here, content here', making it look like
                                                            readable English. Many desktop publishing packages and web
                                                            page editors now use Lorem Ipsum as their default model
                                                            text, and a search <img
                                                                src="{{ asset('images/gchoco/icon.png') }}"
                                                                alt="#" /></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="customers_box">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="customers_pro">
                                                        <figure><img src="images/test_pro.png" alt="#" /></figure>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="cos_text text_align_left">
                                                        <h3>DIANA MORJU</h3>
                                                        <p>using 'Content here, content here', making it look like
                                                            readable English. Many desktop publishing packages and web
                                                            page editors now use Lorem Ipsum as their default model
                                                            text, and a search <img
                                                                src="{{ asset('images/gchoco/icon.png') }}"
                                                                alt="#" /></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end customers section -->
    <!-- choose -->
    <div class="choose">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>WHY CHOOSE US</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="chose_box text_align_center">
                        <i><img src="{{ asset('images/gchoco/icon_cho1.png') }}" alt="#" /></i>
                        <h3>3000+ <br>Orders Per Day</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chose_box text_align_center">
                        <i><img src="{{ asset('images/gchoco/icon_cho2.png') }}" alt="#" /></i>
                        <h3>40000+ <br> Customers</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chose_box text_align_center">
                        <i><img src="{{ asset('images/gchoco/icon_cho3.png') }}" alt="#" /></i>
                        <h3>50+ <br>Awards</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="read_more" href="Javascript:void(0)">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end choose -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a class="logo_footer" href="index.html"><img src="images/footer_logo.png" alt="#" /></a>
                    </div>
                    <div class="col-md-6">
                        <ul class="social_icon text_align_right">
                            <li><a href="Javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="infoma text_align_left">
                                    <h3>CONTACTS</h3>
                                    <ul class="conta">
                                        <li><img src="images/cal.png" alt="#" />Call +01 1234567890</li>
                                        <li><img src="images/ma.png" alt="#" /> <a href="Javascript:void(0)">
                                                demo@gmail.com</a></li>
                                        <li>stablished fact that a </li>
                                        <li>reader will be distracted </li>
                                        <li>by the readable content </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="infoma text_align_left">
                                    <h3>CUSTOMER SERVICE</h3>
                                    <ul class="servi">
                                        <li><a href="Javascript:void(0)"> Order Tracking</a></li>
                                        <li><a href="Javascript:void(0)"> Shipping Info</a></li>
                                        <li><a href="Javascript:void(0)"> Return Policy</a></li>
                                        <li><a href="Javascript:void(0)"> Check Gift Card Balance</a></li>
                                        <li><a href="Javascript:void(0)"> FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="infoma text_align_left">
                            <h3>GET THE LATEST</h3>
                            <p>stablished fact that a reader will be distracted by the </p>
                            <form class="form_subscri">
                                <input class="newsl" placeholder="Enter your email" type="text"
                                    name="Enter your email">
                                <button class="subsci_btn">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2022 All Rights Reserved. Design by<a href="https://html.design/"> Free html
                                    Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('desain/js/gchoco/jquery.min.js') }}"></script>
    <script src="{{ asset('desain/js/gchoco/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('desain/js/gchoco/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="{{ asset('desain/js/gchoco/custom.js') }}"></script>
    <script type="text/javascript">
        baguetteBox.run('.tz-gallery');
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
