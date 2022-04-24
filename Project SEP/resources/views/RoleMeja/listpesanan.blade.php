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
            @if (count($cart) == 0)
                <h3>Keranjang kosong Silahkan isi keranjang terlebih dahulu</h3>
            @else
                <hr>
                <div class="Header-cart">
                    <label style="margin-left: 10%" class="product-details">Product </label>
                    <label style="margin-left: 28%" class="product-price">Unit</label>
                    <label style="margin-left: 18%" class="product-quantity">Subtotal</label>
                    <hr>
                </div>
                <div class="container-cart">
                    @foreach ($cart as $item)
                        <div class="container-cart-items">
                            <div>
                                <div class="form-check">
                                    @if ($item->cart_checked)
                                        <input class="form-check-input" type="checkbox"
                                            style="zoom: 1.5;margin-left: -15px" value="{{ $item->cart_id }}"
                                            id="flexCheckDefault{{ $item->cart_id }}" checked=true
                                            value="{{ $item->cart_id }}"
                                            onclick="changecheck(flexCheckDefault{{ $item->cart_id }})">
                                    @else
                                        <input class="form-check-input" type="checkbox" value="{{ $item->cart_id }}"
                                            id="flexCheckDefault{{ $item->cart_id }}"
                                            onclick="changecheck(flexCheckDefault{{ $item->cart_id }})">
                                    @endif

                                    <label class="form-check-label" for="flexCheckDefault{{ $item->cart_id }}"
                                        style="color: darkblue;font-size: 20px;">
                                        Pilih Item
                                    </label>
                                </div>
                                <img style="padding-top:5px "
                                    src="{{ URL::to('/') }}/images/ramen/{{ $item->menu_relation->foto_menu }}"
                                    alt="">
                            </div>
                            <div class="container-cart-items-desc">
                                <h4 style="font-weight: bold;font-size: 20px">{{ $item->menu_relation->nama_menu }}</h4>
                                <br>
                                <p style="font-size: 13px">{{ $item->menu_relation->deskripsi_menu  }}</p>
                            </div>
                            <div class="container-cart-items-control">
                                <input id="ambilharga{{ $item->cart_id }}" class="ambilharga" type="hidden"
                                    value="{{ $item->menu_relation->harga_menu }}">
                                <h5 >
                                    Harga:@TampilanRp($item->menu_relation->harga_menu )</h5>
                                <h6 style="margin-bottom: -2%;font-weight: bold">Quantity</h6>
                                <div class="number-input">
                                    <button type="button"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); update(buttonminus{{ $item->cart_id }}); Grandtotal()"
                                        class="btn minus btn-danger" id="buttonminus{{ $item->cart_id }}"
                                        style="width: 30px; height: 20px" value="{{ $item->cart_id }}"></button>
                                    {{-- <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); Grandtotal()" class="btn minus btn-danger"   id="buttonminus{{$item->cart_id}}" style="width: 30px; height: 20px" value="{{$item->cart_id}}"></button> --}}
                                    <input class="quantity" min="1" name="quantity"
                                        id="qty{{ $item->cart_id }}" value={{ $item->cart_quantity }}
                                        type="number" style="width: 40px; height: 20px; font-size:15px; " disabled>
                                    <button type="button"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp();update(buttontambah{{ $item->cart_id }});Grandtotal()"
                                        class="btn plus btn-success" id="buttontambah{{ $item->cart_id }}"
                                        value="{{ $item->cart_id }}" style="width: 30px; height: 20px"></button>
                                </div>
                                <div style="padding-top: 10px">
                                    <a href="{{ url('LudensGameStore/hapuscart') }}/{{ $item->cart_id }}">
                                        <button class="btn-danger" style="font-size: 15px; margin-top: 30%"><i
                                                class="fas fa-trash"></i> Hapus dari cart</button>
                                    </a>
                                </div>
                            </div>
                            <div style="text-align: center" class="container-cart-items-subtotal">
                                <h5 id="subtotal{{ $item->cart_id }}" class="subtotal"
                                    style="color: rgb(49, 46, 46); font-weight: bold;font-size:30px;margin-top: 25%">
                                    @TampilanRp($item->menu_relation->harga_menu  * $item->quantity )</h5>
                            </div>
                        </div>
                        <hr style="color:#333;background-color:rgb(53, 50, 50)">
                    @endforeach
                    <div class="checkout" style=" float: right;">
                        <form action="{{ URL('LudensGameStore/cek') }}" method="GET">
                            <button class="btn-success" style="font-size: 25px;margin-top: 20px;margin-right: 30px"
                                type="submit">
                                <i class="fas fa-cash-register"></i> Checkout</button>
                            <label id="grandtotal"
                                style="font-weight: lighter;color: rgb(49, 46, 46); font-weight: bold;font-size:2rem; width:395px "
                                class="sketchy"> @TampilanRp($grandtotal)</label>
                    </div>
                    </form>
                </div>
            @endif
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
        <script type="text/javascript" src="{{ asset('JS/cart.js') }}" defer rel="stylesheet"></script>
</body>



</html>
