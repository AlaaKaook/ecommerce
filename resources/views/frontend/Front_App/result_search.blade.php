@extends('layouts.front_end2.layaout_front')

@section('content')
    @php
        $result = 0;
    @endphp


    @foreach ($productes as $item)
        @php
            $result += 1;
        @endphp
    @endforeach


    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">


            <div class="row">
                <div class="col-lg-4 col-md-4 mb-4">
                    <div class="filter__found">
                        <h4 class="result_search">Result Search :</h4>
                        <h6><span>{{ $result }}</span> Products found</h6>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($productes as $producte)
                    <div class="col-lg-3 col-md-3 col-sm-6 ">
                        <div class="blog__item border text-center">
                            <div class="blog__item__pic">
                                <img src="{{ asset('producte_img/' . $producte->image) }}" alt="Image Product"
                                    width="360px" height="258.8px">
                            </div>
                            <div class="blog__item__text">

                                <h5><a href="#">{{ $producte->name }}</a></h5>
                                <p>{{ $producte->description }}</p>

                                <hr>
                                <h2>$ {{ $producte->original_price }}</h2>
                                <hr>

                                <form action="{{ route('addcart', $producte->id) }}" method="get">

                                    <div class="quantity mb-4 mt-4">
                                        <div class="pro-qty">
                                            <input type="text" name="qty" value="1" min="1">
                                        </div>
                                    </div>

                                    <button class="btn primary-btn mb-4" type="submit">Add Cart</button>

                                    <a href="{{ route('details_producte', $producte) }}"
                                        class="btn primary-btn mb-4">Details</a>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection



{{-- @extends('layouts.front_end2.layaout_front')

@section('content')
    @php
        $result = 0;
    @endphp


    @foreach ($productes as $item)
        @php
            $result += 1;
        @endphp
    @endforeach

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">


                            <div class="row mb-4 mt-4">
                                <div class="col-lg-4 col-md-4">
                                    <div class="filter__found">
                                        <h6><span>{{ $result }}</span> Products found</h6>
                                    </div>
                                </div>

                    <div class="row">
                        @foreach ($productes as $item)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ asset('producte_img/' . $item->image) }}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="{{ route('addcart', $item->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">{{ $item->name }}</a></h6>
                                        <h5>${{ $item->original_price }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection --}}
