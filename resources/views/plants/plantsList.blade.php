@extends('layouts.main')
@section('content')

<div class="div-box">
    <div class="home-4-new-collections">
        <div class="container">
            <h2 class="title-style title-style-1 text-center"><span class="title-left">Каталог </span><span class="title-right"> Комнатных растений</span></h2>
            <div data-js-module="filtering-demo" class="big-demo go-wide">
                <div class="filter-button-group button-group js-radio-button-group container">
                    <button data-filter="*" class="button is-checked">Все</button>
                    <button data-filter=".outdoor" class="button">Орхидеи</button>
                    <button data-filter=".outdoor" class="button">Ампельные</button>
                    <button data-filter=".outdoor" class="button">Вьющиеся</button>
                    <button data-filter=".outdoor" class="button">Пальмы</button>
                    <button data-filter=".pots" class="button">Фикусы</button>

                </div>
                <!-- Проверка на добавление -->
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-success">{{session()->get('error')}}</div>
                @endif
                <!--  -->
                <ul class="grid shortcode-product-wrap product-begreen columns-6">
                    @forelse ($plantsList as $plant)
                    <li data-category="outdoor" class="element-item product-item-wrap product-style_1 pots seeds indoor">
                        <div class="product-item-inner">
                            <div class="product-thumb">
                                <div class="product-flash-wrap"></div>
                                <div class="style-img-div">
                                    <img src="./Images/Small/{{$plant->photoSmallPath}}" alt="product1" class="style-img"/>
                                </div>
                                <a href="{{route('onePlant', ['id' => $plant->id])}}" class="product-link">
                                    <div class="product-hover-sign">
                                        <hr/>
                                        <hr/>
                                    </div></a>
                                <div class="product-info">
                                    <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><a href="#">
                                        <h3>{{$plant->name}}</h3></a><span class="price"><span class="product-begreen-price-amount amount">{{$plant->shortInfo}}</span></span>
                                </div>
                                <div class="product-actions">
                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-17">
                                        <div class="yith-wcwl-add-button show">
                                            <a href="{{route('addPlantToFavor', ['userId'=>1, 'plantId'=>$plant->id])}}" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Добавить в избранное</a>
                                        </div>
                                    </div>
                                        <div class="add-to-cart-wrap">
                                            <a href="#" class="add_to_cart_button"><i class="fa fa-cart-plus"></i> Add to cart</a>
                                        </div>
                                        <div class="yith-wcwl-add-button show">
                                            <a href="#" class="product-quick-view"><i class="fa fa-search"></i>Quick view</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @empty
                        <h2>Что-то сломалось =(</h2>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
