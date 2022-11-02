@extends('layout_admin2.layout')

@section('titel')

<span class="page-title-icon bg-gradient-primary text-white me-2">
    <i class="mdi mdi mdi-wallet-giftcard"></i>
</span> Edit Slider

@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('sliders.update', $slider) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputUsername1">Name :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Name"
                            name="name" value="{{$slider->name}}">
                    </div>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="active" {{$slider->active == '1' ? 'checked':''}}> Active </label>
                </div>

                <div class="col-md-12 mt-4">
                    <label class="mb-2">Image :</label>
                    @if ($slider->image)
                        <img src="{{ asset('slider_img/'.$slider->image)}}" alt="Image slider" class="cate-image">
                    @endif
                    <input type="file" class="form-control" name="image" value="{{ $slider->image }}"></br>
                </div>


                <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

            </form>

        </div>
    </div>

@endsection
