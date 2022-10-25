@extends('layouts_admin.admin')

@section('content')
    <div class="card-header">
        <h4>Brand Page</h4>
    </div>

    <div class="mdc-card p-0">
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <td>{{ $brand->id }}</td>
                            <td>{{ $brand->name }}</td>
                            <td>{{ $brand->slug }}</td>
                            <td><img src="{{ asset('brand_img/' . $brand->image) }}" alt="Image brand" class="cate-image"></td>
                            <td>

                                <form action="{{ route('brands.destroy', $brand) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <a href="{{ route('brands.edit', $brand) }}" class="btn btn-primary">Edit</a>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
