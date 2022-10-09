@extends('layouts.front_end.frontend')

@section('content')
    <!-- ***** Explore Area Starts ***** -->

    <div class="main-banner" id="top">
        <div class="container-fluid">
            {{-- <div class="row"> --}}


            <section class="section" id="explore">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="left-content">
                                {{-- <h5>Explore Our Products</h5> --}}
                                <div class="card" style="width: 33rem;">
                                    <div class="card-body">
                                        <h3 class="card-title">Details Product</h3>
                                        <p class="card-text">
                                            Some details about this special product</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <font size="+2">Category Name : </font>
                                            <font size="+1"> {{ $producte->category->name }} </font>
                                        </li>
                                        <li class="list-group-item">
                                            <font size="+2">Product Name : </font>
                                            <font size="+1"> {{ $producte->name }} </font>
                                        </li>
                                        <li class="list-group-item">
                                            <font size="+2">Description product : </font>
                                            <font size="+1"> {{ $producte->description }} </font>
                                        </li>
                                        <li class="list-group-item">
                                            <font size="+2">product brand : </font>
                                            <font size="+1"> {{ $producte->slug }} </font>
                                        </li>
                                        <li class="list-group-item">
                                            <font size="+2">original price : </font>
                                            <font size="+1"> {{ $producte->original_price }} </font>
                                        </li>
                                        <li class="list-group-item">
                                            <font size="+2">selling price : </font>
                                            <font size="+1"> {{ $producte->selling_price }} </font>
                                        </li>
                                    </ul>

                                    <div class="card-body">


                                        <div class="row col-md-3">
                                            <label for="Quantity">Quantity
                                                <input type="text" name="quantity"
                                                    class="form-control input-group input-group-sm mb-3 text-center qty-input"
                                                    value="1">
                                            </label>

                                        </div>

                                        {{-- <div class="input-group text-center mb-3" style="width:130px"> --}}
                                        {{-- <span class="btn input-group-text decrement-btn">-</span> --}}
                                        {{-- <input type="text" name="quantity" class="form-control text-center qty-input" value="1"> --}}
                                        {{-- <span class="btn input-group-text increment-btn">+</span> --}}
                                        {{-- </div> --}}



                                        <a href="#" class=" btn card-link">Card link</a>
                                        <a href="#" class=" btn card-link">Another link</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-content">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="first-image">
                                            <img src="{{ asset('producte_img/' . $producte->image) }}" alt="">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                            <div class="second-image">
                                                <img src="assets/images/explore-image-02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="types">
                                                <h4>Different Types</h4>
                                                <span>Over 304 Products</span>
                                            </div>
                                        </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        {{-- </div> --}}
    </div>
    <!-- ***** Explore Area Ends ***** -->
@endsection

@section('scripts')
    <script>
        function incrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal)) {
                parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        function decrementValue(e) {
            e.preventDefault();
            var fieldName = $(e.target).data('field');
            var parent = $(e.target).closest('div');
            var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

            if (!isNaN(currentVal) && currentVal > 0) {
                parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
            } else {
                parent.find('input[name=' + fieldName + ']').val(0);
            }
        }

        $('.input-group').on('click', '.button-plus', function(e) {
            incrementValue(e);
        });

        $('.input-group').on('click', '.button-minus', function(e) {
            decrementValue(e);
        });
    </script>
@endsection
