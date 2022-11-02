@extends('layout_admin2.layout')

@section('titel')
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi mdi-wallet-giftcard"></i>
    </span> Add New Slider
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
                @csrf



                {{-- <div class="col-md-6 grid-margin">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name :</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="name" placeholder="Enter Name"
                          name="name">
                        </div>
                    </div>
                </div>
 --}}


                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Name : </label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                name="name">
                    </div>
                </div>

                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="active"> Active </label>
                </div>

                <div class="col-md-12 mt-4">
                    <label class="mb-2">Choose Image :</label>
                    <input type="file" class="form-control" name="image"></br>
                </div>


                <button type="submit" class="btn btn-gradient-primary">SAVE</button>

            </form>

        </div>
    </div>
@endsection
