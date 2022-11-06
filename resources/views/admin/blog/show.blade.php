@extends('layout_admin2.layout')

@section('titel')
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi mdi-blogger"></i>
    </span> Blog Details
@endsection


@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$blog->title}}</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="table">

                                <tbody>

                                    <h3 class="badge badge-gradient-primary">{{$blog->status == 1 ? 'Active':'UnActive'}}</h3>
                                    <hr>
                                     <h3>Content :</h3>
                                        {{$blog->content}}

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">

                       <img src="{{ asset('blog_img/' . $blog->image) }}" alt="Image blog" >

                </div>
            </div>
        </div>
    </div>
@endsection
