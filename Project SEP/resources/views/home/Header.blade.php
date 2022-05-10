 {{-- Navbar top --}}

 <nav class="navbar navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Navbar</a>
     @if (Auth::user()==null)
     <a class="navbar-brand" href="#">Selamat Datang di restoran kami</a>
         @else
         <a class="navbar-brand" href="#">Selamat Datang di {{Auth::user()->akun_nama}}</a>
         @endif

     <a href="{{ URL::to('/') }}/selenium/pesanan">
     <div class="notificationcart" style="margin-left: 250px;">
             <i class="fa-solid fa-cart-shopping"> </i>
             <span>Cart</span>
             <span class="badge">0</span>
     </div>
     <div class="notificationcart">

         @if (Auth::user()==null)
            <a href="{{ url('selenium/login') }}">
            <button style="background-color: transparent; background-repeat: no-repeat;
            border: none; cursor: pointer; overflow: hidden; outline: none; color: red">LOGIN</button>
            </a>
         @else
           <a href="{{ url('selenium/logout') }}">
            <button style="background-color: transparent; background-repeat: no-repeat;
            border: none; cursor: pointer; overflow: hidden; outline: none; color: red">LOGOUT</button>
            </a>
         @endif


     </div>
    </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
         aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
         <div class="navbar-nav">
             <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
             <a class="nav-item nav-link" href="#">Features</a>
             <a class="nav-item nav-link" href="#">Pricing</a>
             <a class="nav-item nav-link disabled" href="#">Disabled</a>
         </div>
     </div>
 </nav>
