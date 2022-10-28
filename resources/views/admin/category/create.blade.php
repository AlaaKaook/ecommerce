@extends('layout_admin2.layout')


@section('titel')
<span class="page-title-icon bg-gradient-primary text-white me-2">
    <i class="mdi mdi mdi-weight"></i>
</span> Add New Category
@endsection
@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                <label for="exampledescription">description :</label>
                <textarea class="form-control" id="exampledescription" rows="3" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="examplemeta_title">Meta Title</label>
                <textarea class="form-control" id="examplemeta_title" rows="3" name="meta_title"></textarea>
            </div>


            <div class="form-group">
                <label for="examplemeta_description">Meta Description :</label>
                <textarea class="form-control" id="examplemeta_description" rows="3" name="meta_description"></textarea>
            </div>


            <div class="form-group">
                <label for="examplemeta_keywords">Meta Keywords :</label>
                <textarea class="form-control" id="examplemeta_keywords" rows="3" name="meta_keywords"></textarea>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status"> Status </label>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="popular"> Popular </label>
            </div>


            <div class="col-md-12">
                <label class="mb-2">Choose Image :</label>
                <input type="file" class="form-control" name="image"></br>
            </div>


            <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

        </form>

    </div>
</div>

@endsection


    {{-- <div class="card">

        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
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

                    <div class="col-md-12">
                        <label for="">Description :</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-md-6">

                        <label for="">status :</label>
                        <input type="checkbox" name="status">
                    </div>

                    <div class="col-md-6">

                        <label for="">popular :</label>
                        <input type="checkbox" name="popular">
                    </div>
                    </br>
                    </br>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title :</label>
                        <textarea name="meta_title" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta KeyWord :</label>
                        <textarea name="meta_keywords" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description :</label>
                        <textarea name="meta_description" id="" cols="30" rows="5" class="form-control"></textarea>
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


