@extends('index')

@section('content')
    <div class="card card-primary" style="margin:20px; border-radius: 15px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="font-weight: 600;">Edit Employee</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashbord</a></li>
                            <li class="breadcrumb-item active">Edit Employee</li>
                        </ol>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                                          <li class="breadcrumb-item active">Add Empl</li> -->
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        {{-- <form action=" " method="POST">
        <div class="card card-primary">
            <div class="card-body" style=" width:70%; margin-left: 15%; ">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name </label>
                    <input type="text" name='name' class="form-control" id="name" placeholder="Enter fullname"
                        value="{{ $userDetail->fullname }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone </label>
                    <input type="text" name='phone' class="form-control" id="phone" placeholder="phone"
                        value="{{ $userDetail->phone }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <input type="text" name='address' class="form-control" id="address" placeholder="Enter address"
                        value="{{ $userDetail->address }}">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" name='email' class="form-control" id="email" placeholder="Enter email"
                        value="{{ $userDetail->email }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">UserName </label>
                    <input type="text" name='usersname' class="form-control" id="usersname" placeholder="Enter username"
                        value="{{ $userDetail->username }}">
                    @error('usersname')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name='password' class="form-control" id="password" placeholder="Password">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                        @enderror
                  </div>
                <div class="form-group">
                        <label for="exampleInputPassword1">Confilm Password</label>
                        <input type="password" name='confilmpassword' class="form-control" id="confilmpassword" placeholder="Confilm Password">
                        @error('confilmpassword')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                        @enderror
                  </div>
                <div class="form-group">
                    <label>Role</label>
                    <select name='active' class="form-control" value="{{ $userDetail->active }}">
                        <option value="1">Admin</option>
                        <option value="0">Employee</option>

                    </select>
                </div>


            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="" class="btn btn-default float-right">Cancel</button>
            </div>

        </div>
        @csrf
            </form> --}}
        {{-- test --}}
        <form action=" " method="POST">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default" style="box-shadow: none;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Full Name </label>
                                <input type="text" name='name' class="form-control" id="name"
                                    placeholder="Enter fullname" value="{{ $userDetail->fullname }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone </label>
                                <input type="text" name='phone' class="form-control" id="phone" placeholder="phone"
                                    value="{{ $userDetail->phone }}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">UserName </label>
                                <input type="text" name='usersname' class="form-control" id="usersname"
                                    placeholder="Enter username" value="{{ $userDetail->username }}">
                                @error('usersname')
                                    <div class="alert alert-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address </label>
                                <input type="text" name='address' class="form-control" id="address"
                                    placeholder="Enter address" value="{{ $userDetail->address }}">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="col-12 col-sm-6">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name='password' class="form-control" id="password"
                                  placeholder="Password">
                              @error('password')
                                  <div class="alert alert-danger">{{ $message }}
                                  </div>
                              @enderror
                          </div>

                      </div> --}}
                        {{-- <div class="col-12 col-sm-6">
                          <div class="form-group">
                              <label for="exampleInputPassword1">Confilm Password</label>
                              <input type="password" name='confilmpassword' class="form-control" id="confilmpassword"
                                  placeholder="Confilm Password">
                              @error('confilmpassword')
                                  <div class="alert alert-danger">{{ $message }}
                                  </div>
                              @enderror
                          </div>
                      </div> --}}

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="email" name='email' class="form-control" id="email"
                                    placeholder="Enter email" value="{{ $userDetail->email }}">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Role</label>
                                <select name='active' class="form-control" value="{{ $userDetail->active }}">
                                    <option value="1">Admin</option>
                                    <option value="0">Employee</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="card-footer" style="background-color: white;">
                    <div style="float: right; margin-bottom: 15px;">
                        <button type="submit" class="btn btn-lg btn-dark">Save</button>
                        <a href="{{ route('listemployee') }}" class="btn btn-light btn-lg">Cancel</a>
                    </div>
                </div>
            </div>

            @csrf
        </form>
    </div>
@endsection
