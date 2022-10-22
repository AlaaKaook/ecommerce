@extends('layouts.front_end.frontend')

@section('content')

    <form action="{{ route('addorder') }}" method="get">

        <div class="main-banner" id="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Basic Details</h6>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="">First Name
                                                    <input type="text" name="fname" value="{{ Auth::user()->fname }}"
                                                        placeholder="First Name"
                                                        class="form-control {{ $errors->has('fname') ? ' has-danger' : '' }}">

                                                    @if ($errors->has('fname'))
                                                        <span id="fname-error" class="error text-danger"
                                                            for="input-fname">{{ $errors->first('fname') }}</span>
                                                    @endif

                                                </label>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">Last Name
                                                    <input type="text" name="lname" value="{{ Auth::user()->lname }}"
                                                        placeholder="Last Name"
                                                        class="form-control {{ $errors->has('lname') ? ' has-danger' : '' }}">

                                                    @if ($errors->has('lname'))
                                                        <span id="lname-error" class="error text-danger"
                                                            for="input-lname">{{ $errors->first('lname') }}</span>
                                                    @endif

                                                </label>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="">Email
                                                    <input type="email" name="email" value="{{ Auth::user()->email }}"
                                                        placeholder="Email"
                                                        class="form-control {{ $errors->has('email') ? ' has-danger' : '' }}">

                                                    @if ($errors->has('email'))
                                                        <span id="email-error" class="error text-danger"
                                                            for="input-email">{{ $errors->first('email') }}</span>
                                                    @endif


                                                </label>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="">Phone Number
                                                    <input type="text" name="phone" value="{{ Auth::user()->phone }}"
                                                        placeholder="Phone Number"
                                                        class="form-control {{ $errors->has('phone') ? ' has-danger' : '' }}">

                                                    @if ($errors->has('phone'))
                                                        <span id="phone-error" class="error text-danger"
                                                            for="input-phone">{{ $errors->first('phone') }}</span>
                                                    @endif

                                                </label>
                                            </div>


                                            <div class="col-md-6">
                                                <label for="">Address
                                                    <input type="text" name="address"
                                                        value="{{ Auth::user()->address }}"
                                                        placeholder="Enter your Address"
                                                        class="form-control {{ $errors->has('address') ? ' has-danger' : '' }}">

                                                    @if ($errors->has('address'))
                                                        <span id="address-error" class="error text-danger"
                                                            for="input-address">{{ $errors->first('address') }}</span>
                                                    @endif


                                                </label>
                                            </div>



                                            {{-- <div class="col-md-6">
                                                <label for="">Pin Code
                                                    <input type="text" name="pin_code" placeholder="Pin Code"
                                                        class="form-control">
                                                </label>
                                            </div> --}}


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Order Details</h6>
                                        <hr>

                                        <div class="table-responsive">
                                            <table class="table table-hoverable">
                                                <thead>
                                                    <tr>

                                                        <th>Name</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @php
                                                        $total = 0;
                                                    @endphp


                                                    @if (session('cart'))
                                                        @foreach (session('cart') as $id => $details)
                                                            <tr>

                                                                <td>
                                                                    {{ $details['name'] }}
                                                                </td>

                                                                <td data-th="Quantity">
                                                                    {{ $details['quantity'] }}
                                                                </td>

                                                                <td data-th="Subtotal">
                                                                    $
                                                                    {{ $details['original_price'] * $details['quantity'] }}
                                                                </td>

                                                            </tr>
                                                            @php $total += $details['original_price'] * $details['quantity']; @endphp
                                                        @endforeach
                                                    @endif

                                                </tbody>

                                                <tr>
                                                    <td>
                                                        <h5>The Total Price : $ {{ $total }}</h5>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>

                                                        <div class="col-md-8">
                                                            <button class="btn btn-info" type="submit">Send
                                                                Information</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection
