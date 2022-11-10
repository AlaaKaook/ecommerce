@extends('layout_admin2.layout')


@section('titel')
    <span class="page-title-icon bg-gradient-primary text-white me-2">
        <i class="mdi mdi-message-text"></i>
    </span> Message Page
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
                            <th>Replay By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            {{-- {{dd($messages)}} --}}
                            <tr>
                                <td><a href="{{ route('message_details', $message) }}">{{ $message->id }}</a></td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->content }}</td>

                                @if ($message->sender != null)
                                    <td>{{ $message->sender }}</td>
                                @else
                                    <td> ---- </td>
                                @endif

                                <td>
                                    <form action="{{ route('messages.destroy', $message) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        @if ($message->sender == "customer")

                                        <a href="{{ route('messages.replay', $message) }}" class="btn btn-primary">Repaly</a>

                                        @endif

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

    {{-- {{ $messages->links('pagination::bootstrap-4') }} --}}
@endsection
