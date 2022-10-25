@extends('layouts_admin.admin')

@section('content')

<div class="card">

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

</div>

@endsection
