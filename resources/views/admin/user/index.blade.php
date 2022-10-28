@extends('layout_admin2.layout')

@section('titel')
   User Page
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
                            <th>email</th>
                            <th>address</th>
                            <th>phone</th>
                            <th>Role</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><a href="{{ route('users.show' , $user)}}">{{ $user->id }}</a></td>
                                <td>{{ $user->fname .' '.$user->lname }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->phone }}</td>

                                <td>{{$user->role_as == '0'? 'Normal User':'Admin User'}}</td>

                                {{-- @if ($user->role_as == '0')

                                <td>Normal User</td>

                                @elseif ($user->role_as == '1')

                                <td>Admin User</td>

                                @endif --}}

                                <td><img src="{{ asset('user_img/' . $user->image) }}" alt="Image user" class="cate-image"></td>
                                <td>

                                    <form action="{{ route('users.destroy', $user) }}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>

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


{{--
    <div class="card-header">
        <h4>User Page</h4>
    </div>

    <div class="mdc-card p-0">
        <div class="table-responsive">
            <table class="table table-hoverable">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>address</th>
                        <th>phone</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fname .' '.$user->lname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>

                            <td>{{$user->role_as == '0'? 'Normal User':'Admin User'}}</td>

                            <td><img src="{{ asset('user_img/' . $user->image) }}" alt="Image user" class="cate-image"></td>
                            <td>

                                <form action="{{ route('users.destroy', $user) }}" method="post">
                                    @csrf
                                    @method('delete')

                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
