@extends('layout_admin2.layout')

@section('titel')
    Products Page
@endsection

@section('content')

    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productes as $producte)
                            <tr>
                                <td>{{ $producte->id }}</td>
                                <td>{{ $producte->name }}</td>
                                <td>{{$producte->category->name}}</td>
                                <td>{{ $producte->description }}</td>
                                <td><img src="{{ asset('producte_img/' . $producte->image) }}" alt="Image product"
                                        class="cate-image"></td>
                                <td>

                                    <form action="{{ route('productes.destroy', $producte) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('productes.edit', $producte) }}" class="btn btn-primary">Edit</a>

                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    {{-- <div class="card-header">
        <h4>product Page</h4>
    </div>

    <div class="mdc-card p-0">
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productes as $producte)
                        <tr>
                            <td>{{ $producte->id }}</td>
                            <td>{{ $producte->name }}</td>
                            <td>{{ $producte->description }}</td>
                            <td><img src="{{ asset('producte_img/' . $producte->image) }}" alt="Image product"
                                    class="cate-image"></td>
                            <td>

                                <form action="{{ route('productes.destroy', $producte) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <a href="{{ route('productes.edit', $producte) }}" class="btn btn-primary">Edit</a>

                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
@endsection
