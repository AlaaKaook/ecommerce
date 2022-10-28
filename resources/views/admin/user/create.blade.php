@extends('layout_admin2.layout')

@section('titel')
    Add New User
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputUsername1">First Name :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Enter your First Name" name="fname">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputUsername2">Last Name :</label>
                        <input type="text" class="form-control" id="exampleInputUsername2"
                            placeholder="Enter your Last Name" name="lname">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputUseremail">Email :</label>
                        <input type="text" class="form-control" id="exampleInputUseremail" placeholder="Enter your Email"
                            name="email">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputUseraddress">Address :</label>
                        <input type="text" class="form-control" id="exampleInputUseraddress"
                            placeholder="Enter your Address" name="address">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputUserphone">Phone :</label>
                        <input type="text" class="form-control" id="exampleInputUserphone"
                            placeholder="Enter your Address" name="phone">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputUserpassword">Password :</label>
                        <input type="password" class="form-control" id="exampleInputUserpassword"
                            placeholder="Enter your Password" name="password">
                    </div>

                    <div class="col-md-6 mt-3 mb-3">

                        <label for="">Role :</label>

                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="role_as" id="role_as"  value="0"> Normal
                                User </label>
                        </div>


                        <div class="form-check form-check-primary">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="role_as" id="role_as"  value="1"> Admin User
                            </label>
                        </div>

                    </div>


                    <div class="col-md-12">
                        <label class="mb-2">Choose Image :</label>
                        <input type="file" class="form-control" name="image"></br>
                    </div>

                    <div class="col-md-4">
                        <button type="submit" class="btn btn-gradient-primary me-2">SAVE</button>
                    </div>

            </form>

        </div>
    </div>
@endsection


{{-- <div class="card">

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

</div> --}}
