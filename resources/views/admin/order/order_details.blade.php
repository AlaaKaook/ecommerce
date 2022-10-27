@extends('layout_admin2.layout')

@section('titel')
    Order Details
@endsection

@section('content')

<div class="main-banner" id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Basic Details</h4>
                                <hr>
                                <div class="row">

                                    <div class="col-md-6 mb-4">
                                        <label class="mb-2">First Name</label>
                                        <div class="border form-control"> {{ $user->fname }}</div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="mb-2" for="">Last Name</label>

                                        <div class="border form-control"> {{ $user->lname }}</div>

                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="mb-2" for="">Email</label>
                                        <div class="border form-control"> {{ $user->email }}</div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <label class="mb-2" for="">Phone Number</label>
                                        <div class="border form-control"> {{ $user->phone }}</div>
                                    </div>


                                    <div class="col-md-6 mb-4">
                                        <label class="mb-2" for="">Address</label>
                                        <div class="border form-control"> {{ $user->address }}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order Details</h4>
                                <hr>
                                <table class="table table-bordered">
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

                                        <tr>
                                            <td colspan="3">
                                                <h5>The Total Price : $ {{ $total }}</h5>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td colspan="3">

                                                <div class="col-md-8">
                                                    <button class="btn btn-primary" type="submit">Place Order</button>
                                                </div>
                                            </td>


                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection


    {{--
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Basic Details</h4>
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-6 mb-4">
                                            <label class="mb-2">First Name</label>
                                            <div class="border form-control"> {{ $user->fname }}</div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="mb-2" for="">Last Name</label>

                                            <div class="border form-control"> {{ $user->lname }}</div>

                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <label class="mb-2" for="">Email</label>
                                            <div class="border form-control"> {{ $user->email }}</div>
                                        </div>


                                        <div class="col-md-6 mb-4">
                                            <label class="mb-2" for="">Phone Number</label>
                                            <div class="border form-control"> {{ $user->phone }}</div>
                                        </div>


                                        <div class="col-md-6 mb-4">
                                            <label class="mb-2" for="">Address</label>
                                            <div class="border form-control"> {{ $user->address }}</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Order Details</h4>
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
    </div> --}}

