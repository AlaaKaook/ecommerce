@extends('layout_admin2.layout')

@section('titel')
    Pending Orders
@endsection
@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered text-center">
          <thead>
            <tr>
                <th>Id</th>
                <th>Name Customer</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)

            <tr>
                <td><a href="{{route('order.details' , $order)}}">{{ $order->id }}</a></td>
                <td>{{ $order->fname }} {{ $order->lname }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->email }}</td>

                <td> <a href="{{ route('orders.update', $order->id) }}" class="btn btn-success">Pending</a>
                    </td>

            </tr>

        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


@endsection



    {{-- <div class="mdc-card p-0">
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name Customer</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)

                        <tr>
                            <td><a href="{{route('order.details' , $order)}}">{{ $order->id }}</a></td>
                            <td>{{ $order->fname }} {{ $order->lname }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->email }}</td>

                            <td> <a href="{{ route('orders.update', $order->id) }}" class="btn btn-success">Pending</a>
                                </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}



