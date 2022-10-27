@extends('layouts_admin.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Add Users</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">

                        <label for="">First Name :</label>
                        <input type="text" class="form-control" name="fname">
                    </div>

                    <div class="col-md-6">

                        <label for="">Last Name :</label>
                        <input type="text" class="form-control" name="lname">
                    </div>

                    <div class="col-md-6">

                        <label for="">email :</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="col-md-12">
                        <label for="">Address :</label>
                        <input type="text" class="form-control" name="address">
                    </div>

                    <div class="col-md-12">
                        <label for="">Phone :</label>
                        <input type="text" class="form-control" name="phone">
                    </div>

                    <div class="col-md-12">
                        <label for="">Password :</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="col-md-6 mt-3 mb-3">
                        <table class="border">

                            <tr>
                                <td><label for="">Role :</label></td>
                            </tr>
                            <tr>
                                <td><label for=""><input type="radio" name="role_as" value="0"> Normal
                                        User</label></td>
                            </tr>
                            <tr>
                                <td><label for=""><input type="radio" name="role_as" value="1"> Admin
                                        User</label></td>

                            </tr>


                        </table>


                    </div>


                    <div class="col-md-12">

                        <label for="">Image :</label>
                        <input type="file" class="form-control" name="image"></br>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
