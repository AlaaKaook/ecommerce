
@extends('layouts.front_end2.layaout_front')

@section('content')
    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">

            <div class="row">

                @foreach ($categories as $category)
                    <div class="col-lg-12">
                        <div class="section-title related-blog-title">
                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>

                    @foreach ($productes as $producte)

                        @if ($producte->category->name == $category->name)

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

                        @endif

                    @endforeach

                @endforeach


            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->
@endsection
