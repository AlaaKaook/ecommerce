    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Categories</h2>
                    </div>

                    <div class="categories__slider owl-carousel">

                        @foreach ($categories as $category)
                            <div class="col-lg-3">
                                <div class="categories__item set-bg"
                                    data-setbg="{{ asset('category_img/' . $category->image) }}">
                                    <h5><a href="{{ route('product_by_category' ,[$category->slug , $category->name] ) }}"> {{ $category->name }}</a></h5>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->
