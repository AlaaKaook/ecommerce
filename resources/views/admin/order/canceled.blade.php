@extends('layouts_admin.admin')

@section('content')
    <div class="mdc-card p-0">
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
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)

                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->fname }} {{ $order->lname }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->email }}</td>

                            <td> <a href="{{ route('orders.update', $order->id) }}" class="btn btn-danger">Canceled</a>
                                </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
