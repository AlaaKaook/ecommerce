@extends('layout_admin2.layout')

@section('titel')
<span class="page-title-icon bg-gradient-primary text-white me-2">
    <i class="mdi mdi-message-text"></i>
</span> Message Details
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
                            <th>Email</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->content }}</td>

                            <td>
                                <form action="{{ route('messages.destroy', $message) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <a href="{{ route('messages.replay' , $message) }}"
                                        class="btn btn-primary">Repaly</a>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <a href="{{ route('productes.index') }}" class="btn btn-primary">Back</a>
                </div>



            </div>
        </div>
    </div>
@endsection
