@extends('layout_admin2.layout')

@section('titel')
    User Details
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
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fname . ' ' . $user->lname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone }}</td>

                            <td>{{ $user->role_as == '0' ? 'Normal User' : 'Admin User' }}</td>

                            <td><img src="{{ asset('user_img/' . $user->image) }}" alt="Image user" class="cate-image"></td>

                            <td> <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edit</a> </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-4">
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
