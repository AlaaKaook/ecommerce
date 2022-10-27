@extends('layouts_admin.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Edit User</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6 mt-3 ">
                        <label for="">First Name :</label>
                        <input type="text" class="form-control" name="fname" value="{{ $user->fname }}">
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <label for="">Last Name :</label>
                        <input type="text" class="form-control" name="lname" value="{{ $user->lname }}">
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <label for="">email :</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <label for="">Address :</label>
                        <input type="text" class="form-control" name="address" value="{{ $user->address }}">
                    </div>


                    <div class="col-md-6 mt-3 ">
                        <label for="">Phone :</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                    </div>

                    <div class="col-md-6 mt-3 ">
                        <label for="">Password :</label>
                        <input type="text" class="form-control" name="password" value="{{ $user->password }}">
                    </div>


                    <div class="col-md-6 mt-3 mb-3">
                        <table class="mt-3 p-2 border">

                            <tr>
                                <td><label for="">Role :</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for=""><input type="radio" name="role_as" value="0"
                                            {{ $user->role_as == '0' ? 'checked' : '' }}> Normal User</label>
                                        </td>

                            </tr>
                            <tr>
                                <td>
                                    <label for=""><input type="radio" name="role_as" value="1"
                                            {{ $user->role_as == '1' ? 'checked' : '' }}> Admin User</label>
                                        </td>

                            </tr>

                        </table>

                    </div>


                    <div class="col-md-12 mt-3 ">

                        <label for="">Image : </label>
                        @if ($user->image)
                            <img src="{{ asset('user_img/' . $user->image) }}" alt="Image user" class="cate-image mb-2 ">
                        @endif
                        <input type="file" class="form-control" name="image" value="{{ $user->image }}"></br>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
