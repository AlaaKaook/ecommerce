@extends('layout_admin2.layout')

@section('titel')
<span class="page-title-icon bg-gradient-primary text-white me-2">
    <i class="mdi mdi mdi-blogger"></i>
</span> Edit Blog
@endsection

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('blogs.update', $blog) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

                <div class="form-group col-md-12">
                    <label for="exampleInputUserTitle">Title :</label>
                    <input type="text" class="form-control" id="exampleInputUserTitle" placeholder="Enter Title"
                        name="title" value="{{ $blog->title }}">
                </div>


            <div class="form-group">
                <label for="exampleContent">Content :</label>
                <textarea class="form-control" id="exampleContent" rows="6" name="content">{{ $blog->content }}</textarea>
            </div>

            <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status" {{$blog->status == '1' ? 'checked':''}}> Status </label>
            </div>

            <div class="col-md-12">
                <label>Image :</label>
                @if ($blog->image)
                    <img src="{{ asset('blog_img/'.$blog->image)}}" alt="Image blog" class="cate-image mb-2">
                @endif
                <input type="file" class="form-control" name="image" value="{{ $blog->image }}"></br>
            </div>



            <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>

        </form>

    </div>
</div>


@endsection
