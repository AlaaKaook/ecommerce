@extends('layouts_admin.admin')

@section('content')

<div class="card-header">
    <h4>Category Page</h4>
</div>

{{--
<div class="card-body">
<table class="table">
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
        @foreach ($categories as $category)

        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><img src="{{ asset('category_img/'.$category->image)}}" alt="Image Category" class="cate-image"></td>
            <td>

                <form action="{{ route('categories.destroy', $category) }}"
                method="post">
                @csrf
                @method('delete')

                <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Edit</a>

                <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div> --}}








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
           @foreach ($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->description}}</td>
            <td><img src="{{ asset('category_img/'.$category->image)}}" alt="Image Category" class="cate-image"></td>
            <td>

                <form action="{{ route('categories.destroy', $category) }}"
                method="post">
                @csrf
                @method('delete')

                <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Edit</a>

                <button type="submit" class="btn btn-danger">Delete</button>
                </form>

          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection

