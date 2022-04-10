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

        <div class="aboutus">
            <div class="videoabout">
                <video autoplay loop muted>
                    <source src={{ asset('video/ramenabout.mp4') }} type="video/mp4">
                </video>
            </div>
        </div>
            {{-- <div class="about-section">
                <h1>About Us Page</h1>
                <p>Some text about who we are and what we do.</p>
                <p>Resize the browser window to see that this page is responsive by the way.</p>
              </div>

              <h2 style="text-align:center">Our Team</h2>
              <div class="row">
                <div class="column">
                  <div class="card">
                    <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                    <div class="container">
                      <h2>Jane Doe</h2>
                      <p class="title">CEO & Founder</p>
                      <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                      <p>jane@example.com</p>
                      <p><button class="button">Contact</button></p>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
                    <div class="container">
                      <h2>Mike Ross</h2>
                      <p class="title">Art Director</p>
                      <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                      <p>mike@example.com</p>
                      <p><button class="button">Contact</button></p>
                    </div>
                  </div>
                </div>

                <div class="column">
                  <div class="card">
                    <img src="/w3images/team3.jpg" alt="John" style="width:100%">
                    <div class="container">
                      <h2>John Doe</h2>
                      <p class="title">Designer</p>
                      <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                      <p>john@example.com</p>
                      <p><button class="button">Contact</button></p>
                    </div>
                  </div>
                </div>
              </div> --}}
    </div>


    @include('home.footer')
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
