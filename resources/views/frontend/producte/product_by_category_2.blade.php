@extends('layouts.front_end2.layaout_front')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/frontend2/img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{ $category->name }}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ route('/') }}">Home</a>
                            {{-- <a href="./index.html">Vegetables</a> --}}
                            <span>{{ $category->name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->



    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>{{$category->name}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($productes as $producte)
                    <div class="col-lg-4 col-md-4 col-sm-6 ">
                        <div class="blog__item border text-center">
                            <div class="blog__item__pic">
                                <img src="{{ asset('producte_img/' . $producte->image) }}" alt="Image Product"
                                    width="360px" height="258.8px">
                            </div>
                            <div class="blog__item__text">

                                <h5><a href="#">{{ $producte->name }}</a></h5>
                                <p>{{ $producte->description }}</p>

                                <hr>
                                <h4>price : ${{ $producte->original_price }}</h4>
                                <hr>

                                <form action="{{ route('addcart', $producte->id) }}" method="get">

                                    {{-- <input type="number" name="qty" value="1" min="1"
                                    class="form-control"><br> --}}

                                    {{-- <div class="product__details__quantity"> --}}
                                    <div class="quantity mb-4 mt-4">
                                        <div class="pro-qty">
                                            <input type="text" name="qty" value="1">
                                        </div>
                                    </div>
                                    {{-- </div> --}}

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
    <!-- Related Blog Section End -->
@endsection
