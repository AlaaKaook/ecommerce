@extends('layout_admin2.layout')


@section('titel')
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi mdi-blogger"></i>
    </span> Add New Blog
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="exampleInputUserTitle">Title :</label>
                    <input type="text" class="form-control" id="exampleInputUserTitle" placeholder="Enter Title"
                        name="title">
                </div>

                <div class="form-group">
                    <label for="exampleContent">Content :</label>
                    <textarea class="form-control" id="exampleContent" rows="6" name="content"></textarea>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="status"> Status </label>
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
