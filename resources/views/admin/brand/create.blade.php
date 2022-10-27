@extends('layout_admin2.layout')


@section('titel')
    Add New Brand
@endsection

@section('content')



<div class="card">
    <div class="card-body">

        <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputUsername1">Name :</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Name"
                        name="name">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputSlug">Slug :</label>
                    <input type="text" class="form-control" id="exampleInputSlug" name="slug" placeholder="Enter Slug">
                </div>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status"> Status </label>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="is_popular"> Popular </label>
            </div>


            <div class="col-md-12 mb-4">
                <label class="mb-2">Choose Image :</label>
                <input type="file" class="form-control" name="image">
            </div>


            <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

        </form>

    </div>
</div>

@endsection



{{-- <div class="card">

    <div class="card-header">
        <h4>Add Brand</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('brands.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name">
                </div>

                <div class="col-md-6">
                    <label for="">Slug :</label>
                    <input type="text" class="form-control" name="slug">
                </div>

                <br><br>

                <div class="col-md-12 mt-3">
                    <label for="">status :  &</label>
                    <input type="checkbox" name="status">
                </div>

                <div class="col-md-12 mt-1">
                    <label for="">popular :</label>
                    <input type="checkbox" name="is_popular">
                </div>
                <br>
                <br>

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



