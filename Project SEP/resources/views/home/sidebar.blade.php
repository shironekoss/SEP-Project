<nav id="sidebar">
    <div class="sidebar-header">
        <div class="logo">
            <a href=""><img src="{{ asset('images/selenium/logoseleniumramen.png') }}" alt="#" /></a>
        </div>
    </div>
    <ul class="list-unstyled components">
        {{-- @if (Route::current()->getName()) --}}
        {{-- @endif --}}
        {{-- @php --}}

        {{-- // @endphp --}}
        @if (Request::path() === 'selenium')
            <li class="active">
                <a href="{{ URL::to('/selenium') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
            </li>
        @else
            <li>
                <a href="{{ URL::to('/selenium') }}"> <i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
            </li>
        @endif
        @if (Request::path() === 'selenium/menu')
            <li class="active">
                <a href="{{ URL::to('/selenium') }}/menu"> <i class="fa fa-angle-right" aria-hidden="true"></i>Menu</a>
            </li>
        @else
            <li>
                <a href="{{ URL::to('/selenium') }}/menu"> <i class="fa fa-angle-right" aria-hidden="true"></i>Menu</a>
            </li>
        @endif

        @if (Request::path() === 'selenium/customorder')
            <li class="active">
                <a href="{{ URL::to('/selenium') }}/customorder"> <i class="fa fa-angle-right"
                        aria-hidden="true"></i>Custom
                    Order</a>
            </li>
        @else
            <li>
                <a href="{{ URL::to('/selenium') }}/customorder"> <i class="fa fa-angle-right"
                        aria-hidden="true"></i>Custom
                    Order</a>
            </li>
        @endif

        @if (Request::path() === 'selenium/aboutus')
        <li class="active">
            <a href="{{ URL::to('/selenium') }}/aboutus"> <i class="fa fa-angle-right" aria-hidden="true"></i>Our
                Restaurant</a>
        </li>
        @else
        <li>
            <a href="{{ URL::to('/selenium') }}/aboutus"> <i class="fa fa-angle-right" aria-hidden="true"></i>Our
                Restaurant</a>
        </li>
        @endif

    </ul>
</nav>
