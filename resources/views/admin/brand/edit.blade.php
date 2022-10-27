@extends('layout_admin2.layout')

@section('titel')
Edit Brand
@endsection

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('brands.update', $brand) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputUsername1">Name :</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Name"
                        name="name" value="{{ $brand->name }}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputSlug">Slug :</label>
                    <input type="text" class="form-control" id="exampleInputSlug" name="slug" placeholder="Enter Slug" value="{{ $brand->slug }}">
                </div>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status" {{$brand->status == '1' ? 'checked':''}}> Status </label>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="is_popular" {{$brand->is_popular == '1' ? 'checked':''}}> Popular </label>
            </div>


            <div class="col-md-12">
                <label>Image :</label>
                @if ($brand->image)
                    <img src="{{ asset('brand_img/'.$brand->image)}}" alt="Image brand" class="cate-image mb-2">
                @endif
                <input type="file" class="form-control" name="image" value="{{ $brand->image }}"></br>
            </div>



            <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

        </form>

    </div>
</div>


@endsection



{{-- <div class="card">

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

</div> --}}




