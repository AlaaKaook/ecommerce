@extends('layout_admin2.layout')


@section('titel')
<span class="page-title-icon bg-gradient-primary text-white me-2">
    <i class="mdi mdi-message-text"></i>
</span> Add New Message
@endsection

@section('content')


<div class="card">
    <div class="card-body">
        <form action="{{ route('messages.store', $message) }}" method="post" enctype="multipart/form-data">
            {{-- {{dd($message->id)}} --}}
            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputUsername1">Name :</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Name"
                        name="name" value="{{$message->name}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail">Email :</label>
                    <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Enter Email" value="{{$message->email}}">

                </div>
            </div>

            <div class="form-group">
                <label for="exampleContent">Content :</label>
                <textarea class="form-control" id="exampleContent" rows="6" name="content"></textarea>
            </div>


            <button type="submit" class="btn btn-gradient-primary me-2">Replay</button>

        </form>

    </div>
</div>


@endsection
