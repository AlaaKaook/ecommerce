  <!-- Latest Product Section Begin -->
  <section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>

                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($latest_product as $producte)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> {{ $producte->name }} </h6>
                                    <span>${{ $producte->original_price }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach ($latest_product as $producte)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> {{ $producte->name }} </h6>
                                    <span>${{ $producte->original_price }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Trending Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($prod_trending as $producte)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> {{ $producte->name }} </h6>
                                    <span>${{ $producte->original_price }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach ($prod_trending as $producte)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> {{ $producte->name }} </h6>
                                    <span>${{ $producte->original_price }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Featured Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            @foreach ($featured_product as $producte)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> {{ $producte->name }} </h6>
                                    <span>${{ $producte->original_price }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            @foreach ($featured_product as $producte)
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6> {{ $producte->name }} </h6>
                                    <span>${{ $producte->original_price }}</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->
