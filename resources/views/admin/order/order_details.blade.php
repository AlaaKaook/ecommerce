@extends('layouts_admin.admin')

@section('content')
    <div class="mdc-card p-0">
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name Product</th>
                        {{-- <th>slug</th> --}}
                        <th>description</th>
                        <th>price</th>
                        <th>qantity</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>


                    @foreach ($order->orderproducts as $item)
                    <tr>
                        <td>{{$item->productes->id}}</td>
                        <td>{{$item->productes->name}}</td>
                        {{-- <td>{{$item->productes->slug}}</td> --}}
                        <td>{{$item->productes->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->prod_qty}}</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
