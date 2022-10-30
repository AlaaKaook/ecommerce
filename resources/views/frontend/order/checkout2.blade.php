@extends('layouts.front_end2.layaout_front')

@section('content')
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">

                <form action="{{ route('addorder') }}" method="get">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Basic Details</h4>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Fist Name<span>*</span></p>
                                                <input type="text" name="fname" value="{{ Auth::user()->fname }}"
                                                    placeholder="First Name"
                                                    class="form-control {{ $errors->has('fname') ? ' has-danger' : '' }}">

                                                @if ($errors->has('fname'))
                                                    <span id="fname-error" class="error text-danger"
                                                        for="input-fname">{{ $errors->first('fname') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Last Name<span>*</span></p>
                                                <input type="text" name="lname" value="{{ Auth::user()->lname }}"
                                                    placeholder="Last Name"
                                                    class="form-control {{ $errors->has('lname') ? ' has-danger' : '' }}">

                                                @if ($errors->has('lname'))
                                                    <span id="lname-error" class="error text-danger"
                                                        for="input-lname">{{ $errors->first('lname') }}</span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Email<span>*</span></p>
                                                <input type="email" name="email" value="{{ Auth::user()->email }}"
                                                    placeholder="Email"
                                                    class="form-control {{ $errors->has('email') ? ' has-danger' : '' }}">

                                                @if ($errors->has('email'))
                                                    <span id="email-error" class="error text-danger"
                                                        for="input-email">{{ $errors->first('email') }}</span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="checkout__input">
                                                <p>Phone<span>*</span></p>
                                                <input type="text" name="phone" value="{{ Auth::user()->phone }}"
                                                    placeholder="Phone Number"
                                                    class="form-control {{ $errors->has('phone') ? ' has-danger' : '' }}">

                                                @if ($errors->has('phone'))
                                                    <span id="phone-error" class="error text-danger"
                                                        for="input-phone">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="checkout__input">
                                        <p>Address<span>*</span></p>
                                        <input type="text" name="address" value="{{ Auth::user()->address }}"
                                            placeholder="Enter your Address"
                                            class="form-control {{ $errors->has('address') ? ' has-danger' : '' }}">

                                        @if ($errors->has('address'))
                                            <span id="address-error" class="error text-danger"
                                                for="input-address">{{ $errors->first('address') }}</span>
                                        @endif

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Order Details</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                @php
                                $total = 0;
                            @endphp

                                <ul>
                                    @if (session('cart'))
                                        @foreach (session('cart') as $id => $details)
                                            <li>{{ $details['name'] }}<span> $
                                                {{ $details['original_price'] * $details['quantity'] }}</span></li>
                                            @php $total += $details['original_price'] * $details['quantity']; @endphp
                                        @endforeach
                                    @endif
                                </ul>

                                <div class="checkout__order__subtotal">Subtotal <span>$ {{ $total }}</span></div>
                                <div class="checkout__order__total">Total <span>$ {{ $total }}</span></div>

                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Check Payment
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Paypal
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
