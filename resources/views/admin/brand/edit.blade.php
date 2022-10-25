@extends('layouts_admin.admin')

@section('content')

<div class="card">

    <div class="card-header">
        <h4>Edit Brand</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('brands.update', $brand) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-md-6">

                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name" value="{{ $brand->name }}">
                </div>

                <div class="col-md-6">

                    <label for="">Slug :</label>
                    <input type="text" class="form-control" name="slug" value="{{ $brand->slug }}">
                </div>

                <div class="col-md-6">
                    <label for="">status :</label>
                    <input type="checkbox" name="status" {{$brand->status == '1' ? 'checked':''}}>
                </div>

                <div class="col-md-6">
                    <label for="">popular :</label>
                    <input type="checkbox" name="is_popular" {{$brand->is_popular == '1' ? 'checked':''}}>
                </div>
                </br>
                </br>

                <div class="col-md-12">
                    <label for="">Image :</label>
                    @if ($brand->image)
                        <img src="{{ asset('brand_img/'.$brand->image)}}" alt="Image brand" class="cate-image">
                    @endif
                    <input type="file" class="form-control" name="image" value="{{ $brand->image }}"></br>
                </div>


                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>

</div>

@endsection
