@extends('layouts.front_end2.layaout_front')

@section('content')
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ asset('producte_img/' . $producte->image) }}" alt="Image Product" width="555px" height="575px">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $producte->name }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            {{-- <span>(18 reviews)</span> --}}
                        </div>
                        <div class="product__details__price">${{ $producte->original_price }}</div>
                        <p>{{$producte->description}}</p>

                        {{-- <a href="{{ route('addcart', $producte->id) }}" class="primary-btn">ADD TO CARD</a> --}}

                        <form action="{{ route('addcart', $producte->id) }}" method="get">

                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>


                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty mx-4">
                                        <input type="text" name="qty" value="1" min="1">
                                    </div>
                                </div>
                            </div>

                            <button class="btn primary-btn" type="submit">ADD TO CART</button>

                        </form>
                        <ul>
                            <li><b>Availability</b>
                                @if ($producte->status == 1)

                                <span>Available</span>

                                @else

                                <span>UnAvailable</span>

                                @endif

                            </li>
                            <li><b>Shipping</b> <span>01 day shipping.</span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection
