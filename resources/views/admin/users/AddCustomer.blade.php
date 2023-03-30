@extends('index')

@section('content')
    {{-- <form action=" " method="POST">
        <div class="card card-primary">
            <div class="card-body" style=" width:70%; margin-left: 15%; ">
                <div class="form-group">
                    <label for="exampleInputRoll">Nhân Viên Bán Hàng:</label>
                    <input type="hidden" value="{{ Auth::user()->id }}" name="employee_id">
                    <input type="text" value="{{ Auth::user()->fullname }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name </label>
                    <input type="text" name='name' class="form-control" id="name" placeholder="Enter fullname">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone </label>
                    <input type="text" name='phone' class="form-control" id="phone" placeholder="Enter phone">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address </label>
                    <input type="text" name='address' class="form-control" id="address" placeholder="Enter address">
                    @error('address')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>
                    <input type="email" name='email' class="form-control" id="email" placeholder="Enter email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name='status' class="form-control">
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>

                    </select>
                </div>


            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="" class="btn btn-default float-right">Cancel</button>
                <a href="{{ route('listCustomer') }} "class="btn btn-default float-right"> Cancel</a>
            </div>

        </div>
        @csrf
    </form> --}}
    <div class="card card-primary" style="margin:20px; border-radius: 15px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0" style="font-weight: 600;">Add Customer</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Customer</li>
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
        <form action=" " method="POST">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default" style="box-shadow: none;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employee Name </label>
                                <input type="hidden" value="{{ Auth::user()->id }}" name="employee_id">
                                <input type="text" value="{{ Auth::user()->fullname }}" class="form-control" readonly>
                            </div>
                        </div>
                        <!-- /.form-group -->
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Customer Name </label>
                              <input type="text" name='name' class="form-control" id="name" placeholder="Enter fullname">
                              @error('name')
                                  <div class="alert alert-danger">{{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Phone </label>
                              <input type="text" name='phone' class="form-control" id="phone" placeholder="Enter phone">
                              @error('phone')
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
                              <input type="text" name='address' class="form-control" id="address" placeholder="Enter address">
                              @error('address')
                                  <div class="alert alert-danger">{{ $message }}
                                  </div>
                              @enderror
                            </div>
                        </div>
                       
                      

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->


                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email </label>
                              <input type="email" name='email' class="form-control" id="email" placeholder="Enter email">
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
                              <label>Status</label>
                              <select name='status' class="form-control">
                                  <option value="1">Active</option>
                                  <option value="0">Deactive</option>
          
                              </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="card-footer" style="background-color: white;">
                    <div style="float: right; margin-bottom: 15px;">
                        <button type="submit" class="btn btn-lg btn-dark">Submit</button>
                        <a href="{{ route('listCustomer') }}" class="btn btn-light btn-lg">Cancel</a>
                    </div>
                </div>
            </div>

            @csrf
        </form>
    </div>
@endsection
