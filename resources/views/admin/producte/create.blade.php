@extends('layouts_admin.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('productes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="category_id">
                            <option>Select a Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                      </div>
                </div>


                    <div class="row">

                        <div class="col-md-6">
                            <label for="">Name :</label>
                            <input type="text" class="form-control" name="name">
                        </div>

                        <div class="col-md-6">
                            <label for="">Slug :</label>
                            <input type="text" class="form-control" name="slug">
                        </div>

                        <div class="col-md-12">
                            <label for="">Small Description :</label>
                            <textarea name="small_description" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label for="">Description :</label>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="">Original Price :</label>
                            <input type="text" class="form-control" name="original_price">
                        </div>

                        <div class="col-md-6">
                            <label for="">Selling Price :</label>
                            <input type="text" class="form-control" name="selling_price">
                        </div>

                        <div class="col-md-12">
                            <label for="">Qantity :</label>
                            <input type="text" class="form-control" name="qantity">
                        </div>

                        <div class="col-md-6">
                            <label for="">status :</label>
                            <input type="checkbox" name="status">
                        </div>

                        <div class="col-md-6">
                            <label for="">Trending :</label>
                            <input type="checkbox" name="trending">
                        </div>

                        <div class="col-md-12">

                            <label for="">Image :</label>
                            <input type="file" class="form-control" name="image"></br>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
            </form>
        </div>

    </div>
@endsection
