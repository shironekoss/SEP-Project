
<div class="orders left_cross_right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>FREE STANDARD ORDERS </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ordersid" class="carousel slide orders_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#ordersid" data-slide-to="0" class="active"></li>
                        <li data-target="#ordersid" data-slide-to="1"></li>
                        <li data-target="#ordersid" data-slide-to="2"></li>
                    </ol>


 <div class="carousel-inner">
{{-- untuk pengecekkan carousel --}}
    <?php
        $noitem = 1;
        foreach ($listmenu as $menu ) {
            if($noitem==1){
                $noitem+=1;
    ?>
    <div class="carousel-item active">
        <div class="container">
            <div class="carousel-caption">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="orders_box text_align_left">
                            <div class="orders_img">
                                <figure><img
                                        src="{{ URL::to('/') }}/images/ramen/{{ $menu->foto_menu }}"
                                        alt="#" /></figure>
                                <div class="price">
                                    <span>Harga<br>@TampilanRp($menu->harga_menu)</span>
                                </div>
                            </div>
                            <div class="party">
                                <h5>{{ $menu->nama_menu }}</h5>
                            </div>
                            <a class="read_more" href="Javascript:void(0)">Pesan</a>
                        </div>
                    </div>

                    <?php
                    }elseif ($noitem<5) {
                            $noitem+=1
                        ?>
                    <div class="col-sm-3">
                        <div class="orders_box text_align_left">
                            <div class="orders_img">
                                <figure><img
                                        src="{{ URL::to('/') }}/images/ramen/{{ $menu->foto_menu }}"
                                        alt="#" /></figure>
                                <div class="price">
                                    <span>Harga<br>@TampilanRp($menu->harga_menu)</span>
                                </div>
                            </div>
                            <div class="party">
                                <h5>{{ $menu->nama_menu }}</h5>
                            </div>
                            <a class="read_more" href="Javascript:void(0)">Pesan</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#ordersid" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a class="carousel-control-next" href="#ordersid" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
</div>
</div>
</div>
</div>
</div>
