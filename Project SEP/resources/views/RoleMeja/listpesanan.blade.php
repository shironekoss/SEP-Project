<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" type="text/css" href="{{ asset('desain/checkout/checkout.css') }}">
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
                                </div>
                                <img style="padding-top:5px "
                                    src="{{ URL::to('/') }}/images/ramen/{{ $item->menu_relation->foto_menu }}"
                                    alt="">
                            </div>
                            <div class="container-cart-items-desc">
                                <h4 style="font-weight: bold;font-size: 20px">{{ $item->menu_relation->nama_menu }}
                                </h4>
                                <br>
                                <p style="font-size: 13px">{{ $item->menu_relation->deskripsi_menu }}</p>
                            </div>
                            <div class="container-cart-items-control">
                                <input id="ambilharga{{ $item->pesanancart_id }}" class="ambilharga"
                                    type="hidden" value="{{ $item->menu_relation->harga_menu }}">
                                <h5>
                                    Harga:@TampilanRp($item->menu_relation->harga_menu )</h5>
                                <h6 style="margin-bottom: -2%;font-weight: bold">Quantity</h6>
                                <div class="number-input">
                                    <button type="button"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); update(buttonminus{{ $item->pesanancart_id }}); Grandtotal()"
                                        class="btn minus btn-danger" id="buttonminus{{ $item->pesanancart_id }}"
                                        style="width: 30px; height: 20px"
                                        value="{{ $item->pesanancart_id }}"></button>
                                    {{-- <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown(); Grandtotal()" class="btn minus btn-danger"   id="buttonminus{{$item->cart_id}}" style="width: 30px; height: 20px" value="{{$item->cart_id}}"></button> --}}
                                    <input class="quantity" min="1" name="quantity"
                                        id="qty{{ $item->pesanancart_id }}" value={{ $item->quantity }}
                                        type="number" style="width: 40px; height: 20px; font-size:15px; " disabled>
                                    <button type="button"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp();update(buttontambah{{ $item->pesanancart_id }});Grandtotal()"
                                        class="btn plus btn-success" id="buttontambah{{ $item->pesanancart_id }}"
                                        value="{{ $item->pesanancart_id }}"
                                        style="width: 30px; height: 20px"></button>
                                </div>
                                <div style="padding-top: 10px">
                                    <a href="{{ url('selenium/hapuspesanan') }}/{{ $item->pesanancart_id }}">
                                        <button class="btn-danger" style="font-size: 15px; margin-top: 30%"><i
                                                class="fas fa-trash"></i> Hapus Pesanan</button>
                                    </a>
                                </div>
                            </div>
                            <div style="text-align: center" class="container-cart-items-subtotal">
                                <h5 id="subtotal{{ $item->pesanancart_id }}" class="subtotal"
                                    style="color: rgb(49, 46, 46); font-weight: bold;font-size:30px;margin-top: 25%">
                                    @TampilanRp($item->menu_relation->harga_menu * $item->quantity )</h5>
                            </div>
                        </div>
                        <hr style="color:#333;background-color:rgb(53, 50, 50)">
                    @endforeach
                    <div class="checkout" style=" float: right;">
                        {{-- <form action="{{ URL('LudensGameStore/cek') }}" method="GET"> --}}
                        <button class="btn-success" style="font-size: 25px;margin-top: 20px;margin-right: 30px"
                            type="submit" data-toggle="modal" data-target="#MetodePembayaran" id="Pembayaran">
                            <i class="fas fa-cash-register"></i> Checkout</button>
                        <label id="grandtotal"
                            style="font-weight: lighter;color: rgb(49, 46, 46); font-weight: bold;font-size:2rem; width:395px; padding-left: 5% "
                            class="sketchy"> @TampilanRp($grandtotal)</label>
                    </div>
                    {{-- </form> --}}
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
    {{-- untuk home --}}
    @include('home.footer')

    <!-- end footer -->
    {{-- modal --}}
    <div class="modal fade" id="MetodePembayaran" tabindex="-1" role="dialog" aria-labelledby="MetodePembayaran"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="display: block; text-align: center">
                <div class="modal-body">
                    {{-- <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: bold; float: left;">Saldo Anda : @TampilanRp(Auth::user()->users_saldo)
                </h5> --}}

                    @csrf
                    <h5 style="clear: both;font-weight: bold;">Ringkasan Pembayaran</h5>
                    <div id="header-modal">
                        <h6>Total Tagihan  </h6>
                        <label id="subTotalTagihan" name="subTotalTagihan"></label>
                    </div>
                    <form id="pembayaranKB" action="pembayaran" method="post">
                        @csrf
                        <Button value="Ovo" class="buttonbayar" name="pemb" id="buttonovo">
                            <img src="{{ asset('images/WalletIcon/ovo.png') }}" alt="" class="pay1">
                            <label for="">OVO Wallet</label>
                        </Button>
                        <Button value="Dana" class="buttonbayar" name="pemb" id="buttondana">
                            <img src="{{ asset('images/WalletIcon/dana.png') }}" alt="" class="pay1">
                            <label for="">Dana Wallet</label>
                        </Button>
                        <Button value="Gopay" class="buttonbayar" name="pemb" id="buttongopay">
                            <img src="{{ asset('images/WalletIcon/gopay.png') }}" alt="" class="pay1">
                            <label for="">GoPay Wallet</label>
                        </Button>
                        <Button value="Shoppepay" class="buttonbayar" name="pemb" id="buttonshoppe">
                            <img src="{{ asset('images/WalletIcon/sope.png') }}" alt="" class="pay1">
                            <label for="">Shoppe Pay wallet</label>
                        </Button>
                        <Button value="BCA Transfer" class="buttonbayar" name="pemb" id="buttonBCA">
                            <img src="{{ asset('images/WalletIcon/bca.png') }}" alt="" class="pay1">
                            <label for="">Transfer BCA</label>
                        </Button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="subcheckout">Checkout</button>
                </div>
            </div>
        </div>
    </div>

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
