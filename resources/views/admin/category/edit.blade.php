@extends('layouts_admin.admin')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Edit Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('categories.update', $category) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">

                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>

                <div class="col-md-6">

                    <label for="">Slug :</label>
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                </div>

                <div class="col-md-12">
                    <label for="">Description :</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $category->description }}</textarea>
                </div>

                <div class="col-md-6">

                    <label for="">status :</label>
                    <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}>
                </div>

                <div class="col-md-6">

                    <label for="">popular :</label>
                    <input type="checkbox" name="popular" {{$category->popular == '1' ? 'checked':''}}>
                </div>
                </br>
                </br>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Title :</label>
                    <textarea name="meta_title" id="" cols="30" rows="5" class="form-control">{{ $category->meta_title }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta KeyWord :</label>
                    <textarea name="meta_keywords" id="" cols="30" rows="5" class="form-control">{{ $category->meta_keywords }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="">Meta Description :</label>
                    <textarea name="meta_description" id="" cols="30" rows="5" class="form-control">{{ $category->meta_description }}</textarea>
                </div>

                <div class="col-md-12">

                    <label for="">Image :</label>
                    @if ($category->image)
                        <img src="{{ asset('category_img/'.$category->image)}}" alt="Image Category" class="cate-image">
                    @endif
                    <input type="file" class="form-control" name="image" value="{{ $category->image }}"></br>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>

</div>

@endsection
