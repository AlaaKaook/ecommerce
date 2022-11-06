@extends('layout_admin2.layout')

@section('titel')
<span class="page-title-icon bg-gradient-primary text-white me-2">
    <i class="mdi mdi mdi-blogger"></i>
</span>  Blog Page
@endsection

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    {{-- <th>Content</th> --}}
                    <th>Image</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td><a href="{{route('blogs.show' , $blog)}}">{{ $blog->id }}</a></td>
                        <td>{{ $blog->title }}</td>
                        {{-- <td>{{ $blog->content }}</td> --}}
                        <td><img src="{{ asset('blog_img/' . $blog->image) }}" alt="Image blog" class="cate-image"></td>
                      <td>{{$blog->created_at}}</td>

                        <td>

                            <form action="{{ route('blogs.destroy', $blog) }}" method="post">
                                @csrf
                                @method('delete')

                                <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-primary">Edit</a>

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
