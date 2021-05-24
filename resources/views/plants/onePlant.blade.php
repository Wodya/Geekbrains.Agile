@extends('layouts.main')
@section('content')
    <div class="div-box mb mt">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-slider">
                        <div id="sync1" class="owl-carousel owl-template">
                            <div class="item">
                                <figure><img src="images/demo/product-5.jpg" alt="slide" width="1080" height="768"/></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/demo/product-2.jpg" alt="slide" width="1080" height="768"/></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/demo/product-3.jpg" alt="slide" width="1080" height="768"/></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/demo/product-4.jpg" alt="slide" width="1080" height="768"/></figure>
                            </div>
                        </div>
                        <div id="sync2" class="owl-carousel owl-template">
                            <div class="item">
                                <figure><img src="images/demo/product-5-b.jpg" alt="slide" width="180" height="130"/></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/demo/product-2-b.jpg" alt="slide" width="180" height="130"/></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/demo/product-3-b.jpg" alt="slide" width="180" height="130"/></figure>
                            </div>
                            <div class="item">
                                <figure><img src="images/demo/product-4-b.jpg" alt="slide" width="180" height="130"/></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <div class="summary-product entry-summary">
                            <h2 class="product_title mb-45">The Calvert with Succulents</h2>
                            <div>
                                <p class="price"><span class="product-begreen-price-amount amount"><span class="product-begreen-price-currencysymbol">$</span>38.00</span></p>
                            </div>
                            <div class="product-single-short-description">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                            <form class="cart">
                                <div class="quantity">
                                    <label>Quantity:</label>
                                    <div class="quantity-inner">
                                        <input step="1" min="1" name="quantity" value="1" title="Qty" size="4" type="number" class="input-text qty text"/>
                                    </div>
                                </div>
                                <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                            <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button show"><a href="#" class="add_to_wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a></div>
                            </div><a href="#" class="compare button"> <i class="fa fa-signal"></i>Compare</a>
                            <div class="product_meta"><span class="product-stock-status-wrapper">
                        <label>Availability:</label><span class="product-stock-status in-stock">In stock</span></span><span class="posted_in">
                        <label>Categories:</label><a href="#">New /</a><a href="#">Outdoor /</a><a href="#">Pots /</a><a href="#">Seeds</a></span><span class="tagged_as">
                        <label>Tag:</label><a href="#">Tree. </a></span></div>
                            <div class="social-share-wrap">
                                <label><i class="fa fa-share-alt"></i>Share:</label>
                                <ul class="social-share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
