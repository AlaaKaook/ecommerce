@extends('layout_admin2.layout')


@section('titel')
    Add New Product
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('productes.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="category_id">
                            <option>Select a Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Name :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Name"
                            name="name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputSlug">Slug :</label>
                        <input type="text" class="form-control" id="exampleInputSlug" name="slug"
                            placeholder="Enter Slug">
                    </div>
                </div>


                <div class="form-group">
                    <label for="examplemetasmall_description">Small Description :</label>
                    <textarea class="form-control" id="examplemetasmall_description" rows="3" name="small_description"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampledescription">Description :</label>
                    <textarea class="form-control" id="exampledescription" rows="3" name="description"></textarea>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputoriginal_price">Original Price :</label>
                        <input type="text" class="form-control" id="exampleInputoriginal_price"
                            placeholder="Enter Original Price" name="original_price">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputUser_selling_price">Selling Price :</label>
                        <input type="text" class="form-control" id="exampleInputUser_selling_price"
                            placeholder="Enter Name" name="selling_price">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputUser_qantity">Qantity :</label>
                        <input type="text" class="form-control" id="exampleInputUser_qantity" placeholder="Enter Name"
                            name="qantity">
                    </div>
                </div>


                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="status"> Status </label>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="trending"> Trending </label>
                </div>


                <div class="col-md-12 mt-2">
                    <label class="mb-2">Choose Image :</label>
                    <input type="file" class="form-control" name="image"></br>
                </div>


                <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

            </form>

        </div>
    </div>


    {{-- <div class="card">

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
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
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

    </div> --}}
@endsection
