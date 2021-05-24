@extends('layouts.main')
@section('content')
    <h2>Каталог комнатных растений</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @forelse ($plantsList as $plant)
            <div class="col">
                <div class="card">
                    <img src="{{$plant->photoSmallPath}}" class="card-img-top" alt="{{$plant->name}}" width=100%
                         height="180">
                    <div class="card-body">
                        <h5 class="card-title">{{$plant->name}}</h5>
                        <p class="card-text">{{$plant->shortInfo}}</p>
                        <a href="/plants/show" class="btn btn-primary">Подробнее</a>
                        <p class="card-text">{{$plant->tags}}</p>
                    </div>
                </div>
            </div>
        @empty
            <h2>Что-то сломалось =(</h2>
        @endforelse


            <section class="featureSec container-fluid overflow-hidden px-xl-17 pt-xl-12 pb-xl-10 pt-lg-10 pb-lg-4 pt-md-8 pb-md-2 pt-5">
                <!-- mainHeader -->
                <header class="col-12 mainHeader mb-7 text-center">
                    <h1 class="headingIV playfair fwEblod mb-4">Каталог комнатных растений</h1>
                    <span class="headerBorder d-block mb-5"><img src="images/hbdr.png" alt="Header Border" class="img-fluid img-bdr"></span>
                    <p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                </header>
                <div class="col-12 p-0 overflow-hidden d-flex flex-wrap">
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="#" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="#" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="#" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="#" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">68.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 position-relative mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Neque Porro Quisquamest</a></span>
                                <span class="price d-block fwEbold">60.50 $</span>
                                <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Pellentesque aliquet</a></span>
                                <span class="price d-block fwEbold">68.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 position-relative mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Aspetur Autodit Autfugit</a></span>
                                <span class="price d-block fwEbold"><del>80.00 $</del>66.00 $</span>
                                <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">70.50 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-2"><a href="shop-detail.html">Sint Incidunt Utlabore</a></span>
                                <span class="price d-block fwEbold"><del>75.00 $</del>60.50 $</span>
                                <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">HOT</span>
                                <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block ml-8">Sale</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Aliquam Quaerat Voluptem</a></span>
                                <span class="price d-block fwEbold">58.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Neque Porro Quisquam</a></span>
                                <span class="price d-block fwEbold"><del>60.00 $</del>48.00 $</span>
                                <span class="hotOffer green fwEbold text-uppercase text-white position-absolute d-block">Sale</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Sit voluptatem</a></span>
                                <span class="price d-block fwEbold">65.00 $</span>
                            </div>
                        </div>
                    </div>
                    <!-- featureCol -->
                    <div class="featureCol position-relative px-3 mb-6">
                        <div class="border">
                            <div class="imgHolder position-relative w-100 overflow-hidden">
                                <img src="http://placehold.it/320x355" alt="image description" class="img-fluid w-100">
                                <ul class="list-unstyled postHoverLinskList d-flex justify-content-center m-0">
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-heart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-cart d-block"></a></li>
                                    <li class="mr-2 overflow-hidden"><a href="javascript:void(0);" class="icon-eye d-block"></a></li>
                                    <li class="overflow-hidden"><a href="javascript:void(0);" class="icon-arrow d-block"></a></li>
                                </ul>
                            </div>
                            <div class="text-center py-xl-5 py-sm-4 py-2 px-xl-2 px-1">
                                <span class="title d-block mb-3"><a href="shop-detail.html">Aliquam Quaerat Voluptatem</a></span>
                                <span class="price d-block fwEbold">80.00 $</span>
                                <span class="hotOffer fwEbold text-uppercase text-white position-absolute d-block">Hot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </div>
@endsection
