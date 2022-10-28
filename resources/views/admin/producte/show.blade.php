@extends('layout_admin2.layout')

@section('titel')
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi mdi-wallet-giftcard"></i>
    </span> Product Details
@endsection

@section('content')
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Slug</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Small Description</th>
                            <th>Description</th>
                            <th>Orginal Price</th>
                            <th>Selling Price</th>
                            <th>Qantity</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $producte->id }}</td>
                            <td>{{ $producte->slug }}</td>
                            <td>{{ $producte->name }}</td>
                            <td>{{ $producte->category->name }}</td>
                            <td>{{ $producte->small_description }}</td>
                            <td>{{ $producte->description }}</td>
                            <td>{{ $producte->original_price }}</td>
                            <td>{{ $producte->selling_price }}</td>
                            <td>{{ $producte->qantity }}</td>
                            <td><img src="{{ asset('producte_img/' . $producte->image) }}" alt="Image product"
                                    class="cate-image"></td>
                            <td>

                                <form action="{{ route('productes.destroy', $producte) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <div class="mb-2">

                                        <a href="{{ route('productes.edit', $producte) }}" class="btn btn-primary">Edit</a>

                                    </div>
                                    <button type="submit" class="btn btn-danger">Delete</button>



                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <a href="{{ route('productes.index') }}" class="btn btn-primary">Back</a>
                </div>



            </div>
        </div>
    </div>
@endsection
