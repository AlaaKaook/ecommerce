@extends('layouts.front_end2.layaout_front')

@section('content')
    @php
        $total = 0 ;
    @endphp


    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">

                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <img src="{{ asset('producte_img/' . $details['image']) }}" alt="image prod"
                                                    width="100" height="100">
                                                <h5>{{ $details['name'] }}</h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                {{ $details['original_price'] }}
                                            </td>

                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" min="1"
                                                            value="{{ $details['quantity'] }}">
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="shoping__cart__total">
                                                {{ $details['original_price'] * $details['quantity'] }}
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <a href="{{ route('remove_item', $id) }}"> <span class="icon_close"></span></a>

                                            </td>
                                        </tr>
                                        @php $total += $details['original_price'] * $details['quantity']; @endphp
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4">
                                           <h2>The Cart Is Empty</h2>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ route('/') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="{{ route('cart') }}" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span>$ {{ $total }}</span></li>
                            {{-- <li>Total <span>$454.98</span></li> --}}
                        </ul>
                        <a href="{{ route('checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->
@endsection
