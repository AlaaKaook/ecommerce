<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach ($categories as $category)
                            <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="row featured__filter">
            {{-- @php
                $index = 0;
            @endphp --}}

            @foreach ($categories as $category)
                @foreach ($category->productes as $producte)

                @if ($loop->index < 4)
                <div class="col-lg-3 col-md-4 col-sm-6 mix  {{ $category->slug }}  ">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg"
                            data-setbg="{{ asset('producte_img/' . $producte->image) }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{ route('addcart', $producte->id) }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $producte->name }} </a></h6>
                            <h5>${{ $producte->original_price }}</h5>
                        </div>
                    </div>
                </div>
                @endif

                    {{-- @php
                        $index += 1;
                    @endphp --}}

                @endforeach
            @endforeach

        </div>
    </div>
</section>
<!-- Featured Section End -->
