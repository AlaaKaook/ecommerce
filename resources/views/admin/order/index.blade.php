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
                            <td><a href="{{route('order.details' , $order)}}">{{ $order->id }}</a></td>
                            <td>{{ $order->fname }} {{ $order->lname }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->email }}</td>


                            {{-- <form action="{{ route('orders.update', $order->id) }}" method="post">
                                @csrf
                                @method('delete')

                                @if ($order->status == 0)

                                <td><button type="submit" class="btn btn-success">Pending</button></td>

                                @elseif ($order->status == 1)

                                <td><button type="submit" class="btn btn-danger">Canceled</button></td>

                                @elseif ($order->status == 2)

                                <td><button type="submit" class="btn btn-primary">Completed</button></td>

                                @endif

                            </form> --}}


                            {{-- /////////////////////////////////// --}}
{{--
                            <td>

                                <form action="{{ route('orders.update', $order->id) }}" method="post">
                                    @csrf

                                    <select>

                                        <option value="{{$order->status}}">Pending</option>
                                        <option value="{{$order->status}}">Canceled</option>
                                        <option value="{{$order->status}}">Completed</option>

                                    </select>

                                </form>


                            </td> --}}


                            {{-- ////////////////////////////// --}}


                            @if ($order->status == 0)

                            <td> <a href="{{ route('orders.update', $order->id) }}" class="btn btn-success">Pending</a>
                                </td>
                            @elseif ($order->status == 2)

                            <td> <a href="{{ route('orders.update', $order->id) }}" class="btn btn-danger">Canceled</a>
                                </td>
                            @elseif ($order->status == 1)

                            <td> <a href="{{ route('orders.update', $order->id) }}"
                                        class="btn btn-primary">Completed</a></td>
                            @endif


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
