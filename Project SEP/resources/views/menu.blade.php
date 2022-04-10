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
    {{-- <link type="text/css" rel="stylesheet" href="{{ Ass('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('desain/css/Gchoco/style.css') }}">
    <!-- Responsive-->
    {{-- <link rel="stylesheet" href="css/responsive.css"> --}}
    <link rel="stylesheet" href="{{ asset('desain/css/Gchoco/responsive.css') }}">
    {{-- <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" /> --}}
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/1be6c09f76.js" crossorigin="anonymous"></script>

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
    @include('home.Header')
    <div class="wrapper">
        <!-- Sidebar -->
        @include('home.sidebar')
        <div id="content">

            <div class="contentmenu">
                @foreach ($listmenu as $item)
                    <div class="col-sm-3">
                        <div class="orders_box text_align_left">
                            <div class="orders_img">
                                <figure><img src="{{ URL::to('/') }}/images/ramen/{{ $item->foto_menu }}" alt="#" />
                                </figure>
                                <div class="price">
                                    <span>Harga<br>@TampilanRp($item->harga_menu)</span>
                                </div>
                            </div>
                            <div class="party">
                                <h5>{{ $item->nama_menu }}</h5>
                            </div>
                            <a class="read_more" href="Javascript:void(0)">Pesan</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex">
                <h2 style="display: block; margin-left: auto;margin-right: auto" class="">
                    {{ $listmenu->links('pagination::bootstrap-4') }}</h2>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- orders section -->

    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>

    <div>
        {{-- untuk home --}}
        @include('home.footer')

        <!-- end footer -->
        <!-- Javascript files-->
        <script src="{{ asset('desain/js/gchoco/jquery.min.js') }}"></script>
        <script src="{{ asset('desain/js/gchoco/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('desain/js/gchoco/jquery-3.0.0.min.js') }}"></script>
        <script src="{{ asset('desain/js/Seleniumcustom/modalimg.js') }}"></script>
        <!-- sidebar -->
        {{-- <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> --}}
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
