@extends('layouts_admin.admin')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Edit Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('productes.update', $producte) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="category_id">
                        <option disabled>Select a Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name" value="{{ $producte->name }}">
                </div>

                <div class="col-md-6">
                    <label for="">Slug :</label>
                    <input type="text" class="form-control" name="slug" value="{{ $producte->slug }}">
                </div>

                <div class="col-md-12">
                    <label for="">Small Description :</label>
                    <input type="text" class="form-control" name="small_description" value="{{ $producte->small_description }}">
                </div>

                <div class="col-md-12">
                    <label for="">Description :</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $producte->description }}</textarea>
                </div>

                <div class="col-md-6">
                    <label for="">Original Price :</label>
                    <input type="text" class="form-control" name="original_price" value="{{ $producte->original_price }}">
                </div>

                <div class="col-md-6">
                    <label for="">Selling Price :</label>
                    <input type="text" class="form-control" name="selling_price" value="{{ $producte->selling_price }}">
                </div>

                <div class="col-md-12">
                    <label for=""> Qantity :</label>
                    <input type="text" class="form-control" name="qantity" value="{{ $producte->qantity }}">
                </div>

                <div class="col-md-6">
                    <label for="">status :</label>
                    <input type="checkbox" name="status" {{$producte->status == '1' ? 'checked':''}}>
                </div>

                <div class="col-md-6">

                    <label for="">Trending :</label>
                    <input type="checkbox" name="trending" {{$producte->trending == '1' ? 'checked':''}}>
                </div>

                <div class="col-md-12">

                    <label for="">Image :</label>
                    @if ($producte->image)
                        <img src="{{ asset('producte_img/'.$producte->image)}}" alt="Image product" class="cate-image">
                    @endif
                    <input type="file" class="form-control" name="image" value="{{ $producte->image }}"></br>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>

</div>

@endsection
