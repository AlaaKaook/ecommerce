@extends('layouts_admin.admin')

@section('content')

<div class="card-header">
    <h4>product Page</h4>
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
        @foreach ($categories as $product)

        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td><img src="{{ asset('product_img/'.$product->image)}}" alt="Image product" class="cate-image"></td>
            <td>

                <form action="{{ route('categories.destroy', $product) }}"
                method="post">
                @csrf
                @method('delete')

                <a href="{{ route('categories.edit', $product) }}" class="btn btn-primary">Edit</a>

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
           @foreach ($productes as $producte)
          <tr>
            <td>{{$producte->id}}</td>
            <td>{{$producte->name}}</td>
            <td>{{$producte->description}}</td>
            <td><img src="{{ asset('producte_img/'.$producte->image)}}" alt="Image product" class="cate-image"></td>
            <td>

                <form action="{{ route('productes.destroy', $producte) }}"
                method="post">
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
  </div>

@endsection

