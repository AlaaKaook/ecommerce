@extends('layout_admin2.layout')

@section('titel')
      Edit Product
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('productes.update', $producte) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="category_id">
                            <option disabled>Select a Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                      </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">Name :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Name"
                            name="name" value="{{ $producte->name }}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputSlug">Slug :</label>
                        <input type="text" class="form-control" id="exampleInputSlug" name="slug"
                            placeholder="Enter Slug" value="{{ $producte->slug }}">
                    </div>
                </div>


                <div class="form-group">
                    <label for="examplemetasmall_description">Small Description :</label>
                    <textarea class="form-control" id="examplemetasmall_description" rows="3" name="small_description">{{ $producte->small_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="exampledescription">Description :</label>
                    <textarea class="form-control" id="exampledescription" rows="3" name="description">{{ $producte->description }}</textarea>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputoriginal_price">Original Price :</label>
                        <input type="text" class="form-control" id="exampleInputoriginal_price"
                            placeholder="Enter Original Price" name="original_price" value="{{ $producte->original_price }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputUser_selling_price">Selling Price :</label>
                        <input type="text" class="form-control" id="exampleInputUser_selling_price"
                            placeholder="Enter Name" name="selling_price" value="{{ $producte->selling_price }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="exampleInputUser_qantity">Qantity :</label>
                        <input type="text" class="form-control" id="exampleInputUser_qantity" placeholder="Enter Name"
                            name="qantity" value="{{ $producte->qantity }}">
                    </div>
                </div>


                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="status" {{$producte->status == '1' ? 'checked':''}}> Status </label>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="trending" {{$producte->trending == '1' ? 'checked':''}}> Trending </label>
                </div>


                <div class="col-md-12">
                    <label for="">Image :</label>
                    @if ($producte->image)
                        <img src="{{ asset('producte_img/'.$producte->image)}}" alt="Image product" class="cate-image">
                    @endif
                    <input type="file" class="form-control" name="image" value="{{ $producte->image }}"></br>
                </div>


                <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

            </form>

        </div>
    </div>

@endsection


{{-- <div class="card">

    <div class="card-header">
        <h4>Edit Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('productes.update', $producte) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" name="category_id">
                        <option disabled>Select a Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                  </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name" value="{{ $producte->name }}">
                </div>

                <div class="col-md-6">
                    <label for="">Slug :</label>
                    <input type="text" class="form-control" name="slug" value="{{ $producte->slug }}">
                </div>

                <div class="col-md-12">
                    <label for="">Small Description :</label>
                    <input type="text" class="form-control" name="small_description" value="{{ $producte->small_description }}">
                </div>

                <div class="col-md-12">
                    <label for="">Description :</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control">{{ $producte->description }}</textarea>
                </div>

                <div class="col-md-6">
                    <label for="">Original Price :</label>
                    <input type="text" class="form-control" name="original_price" value="{{ $producte->original_price }}">
                </div>

                <div class="col-md-6">
                    <label for="">Selling Price :</label>
                    <input type="text" class="form-control" name="selling_price" value="{{ $producte->selling_price }}">
                </div>

                <div class="col-md-12">
                    <label for=""> Qantity :</label>
                    <input type="text" class="form-control" name="qantity" value="{{ $producte->qantity }}">
                </div>

                <div class="col-md-6">
                    <label for="">status :</label>
                    <input type="checkbox" name="status" {{$producte->status == '1' ? 'checked':''}}>
                </div>

                <div class="col-md-6">

                    <label for="">Trending :</label>
                    <input type="checkbox" name="trending" {{$producte->trending == '1' ? 'checked':''}}>
                </div>

                <div class="col-md-12">

                    <label for="">Image :</label>
                    @if ($producte->image)
                        <img src="{{ asset('producte_img/'.$producte->image)}}" alt="Image product" class="cate-image">
                    @endif
                    <input type="file" class="form-control" name="image" value="{{ $producte->image }}"></br>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>

</div> --}}
