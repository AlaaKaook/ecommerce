@extends('layout_admin2.layout')

@section('titel')
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi mdi-backburger"></i>
    </span> Slider Page
@endsection

@section('content')
    <div class="col-lg-12 grid-margin ">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Active</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->id }}</td>
                                <td>{{ $slider->name }}</td>

                                <td><img src="{{ asset('slider_img/' . $slider->image) }}" alt="Image Slider"
                                        class="cate-image"></td>


                                <td>
                                    {{ $slider->active == '1' ? 'Active' : 'Not Active' }}
                                </td>

                                <td>
                                <form action="{{ route('sliders.destroy', $slider) }}" method="post">
                                    @csrf
                                    @method('delete')

                                        <a href="{{ route('sliders.edit', $slider) }}" class="btn btn-primary">Edit</a>

                                        <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $sliders->links('pagination::bootstrap-4') }}
@endsection
