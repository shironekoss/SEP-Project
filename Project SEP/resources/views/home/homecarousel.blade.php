<div class="orders left_cross_right">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>Best Ramen We Offer</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="ordersid" class="carousel slide orders_Carousel " data-ride="carousel" style="width: 1000px">
                    <ol class="carousel-indicators">
                        <li data-target="#ordersid" data-slide-to="0" class="active"></li>
                        <li data-target="#ordersid" data-slide-to="1"></li>
                        <li data-target="#ordersid" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        {{-- untuk pengecekkan carousel --}}
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="orders_box text_align_left">
                                                <div class="orders_img">
                                                    <figure><img
                                                            src="{{ URL::to('/') }}/images/ramen/{{ $listmenu[0]->foto_menu }}"
                                                            alt="#" /></figure>
                                                    <div class="price">
                                                        <span>Harga<br>@TampilanRp($listmenu[0]->harga_menu)</span>
                                                    </div>
                                                </div>
                                                <div class="party">
                                                    <h5>{{ $listmenu[0]->nama_menu }}</h5>
                                                </div>
                                                <a class="read_more" href="Javascript:void(0)">Pesan</a>
                                            </div>
                                        </div>
                                        @for ($i = 1; $i <= 3; $i++)
                                            <div class="col-sm-3">
                                                <div class="orders_box text_align_left">
                                                    <div class="orders_img">
                                                        <figure><img
                                                                src="{{ URL::to('/') }}/images/ramen/{{ $listmenu[$i]->foto_menu }}"
                                                                alt="#" /></figure>
                                                        <div class="price">
                                                            <span>Harga<br>@TampilanRp($listmenu[$i]->harga_menu)</span>
                                                        </div>
                                                    </div>
                                                    <div class="party">
                                                        <h5>{{ $listmenu[$i]->nama_menu }}</h5>
                                                    </div>
                                                    <a class="read_more" href="Javascript:void(0)">Pesan</a>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="orders_box text_align_left">
                                                <div class="orders_img">
                                                    <figure><img
                                                            src="{{ URL::to('/') }}/images/ramen/{{ $listmenu[4]->foto_menu }}"
                                                            alt="#" /></figure>
                                                    <div class="price">
                                                        <span>Harga<br>@TampilanRp($listmenu[4]->harga_menu)</span>
                                                    </div>
                                                </div>
                                                <div class="party">
                                                    <h5>{{ $listmenu[4]->nama_menu }}</h5>
                                                </div>
                                                <a class="read_more" href="Javascript:void(0)">Pesan</a>
                                            </div>
                                        </div>
                                        @for ($i = 5; $i <= 7; $i++)
                                            <div class="col-sm-3">
                                                <div class="orders_box text_align_left">
                                                    <div class="orders_img">
                                                        <figure><img
                                                                src="{{ URL::to('/') }}/images/ramen/{{ $listmenu[$i]->foto_menu }}"
                                                                alt="#" /></figure>
                                                        <div class="price">
                                                            <span>Harga<br>@TampilanRp($listmenu[$i]->harga_menu)</span>
                                                        </div>
                                                    </div>
                                                    <div class="party">
                                                        <h5>{{ $listmenu[$i]->nama_menu }}</h5>
                                                    </div>
                                                    <a class="read_more" href="Javascript:void(0)">Pesan</a>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="orders_box text_align_left">
                                                <div class="orders_img">
                                                    <figure><img
                                                            src="{{ URL::to('/') }}/images/ramen/{{ $listmenu[8]->foto_menu }}"
                                                            alt="#" /></figure>
                                                    <div class="price">
                                                        <span>Harga<br>@TampilanRp($listmenu[4]->harga_menu)</span>
                                                    </div>
                                                </div>
                                                <div class="party">
                                                    <h5>{{ $listmenu[4]->nama_menu }}</h5>
                                                </div>
                                                <a class="read_more" href="Javascript:void(0)">Pesan</a>
                                            </div>
                                        </div>
                                        @for ($i = 9; $i <= 11; $i++)
                                            <div class="col-sm-3">
                                                <div class="orders_box text_align_left">
                                                    <div class="orders_img">
                                                        <figure><img
                                                                src="{{ URL::to('/') }}/images/ramen/{{ $listmenu[$i]->foto_menu }}"
                                                                alt="#" /></figure>
                                                        <div class="price">
                                                            <span>Harga<br>@TampilanRp($listmenu[$i]->harga_menu)</span>
                                                        </div>
                                                    </div>
                                                    <div class="party">
                                                        <h5>{{ $listmenu[$i]->nama_menu }}</h5>
                                                    </div>
                                                    <a class="read_more" href="Javascript:void(0)">Pesan</a>
                                                </div>
                                            </div>
                                        @endfor
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
