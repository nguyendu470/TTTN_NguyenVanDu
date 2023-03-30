@extends('index')

@section('content')
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card card-primary" style="margin:20px; border-radius: 15px;">
            <div class="content-header" style="display: flex;">
                  <div class="container-fluid">
                        <div class="row mb-2">
                              <div class="col-sm-6">
                                    <h1 class="m-0" style="font-weight: 600;">List Employee</h1>
                                    <ol class="breadcrumb">
                                          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                          <li class="breadcrumb-item active">List Employee</li>
                                    </ol>
                              </div><!-- /.col -->
                              <div class="col-sm-6">
                                    <div style="border-radius: 4px; width: 157px; float: right; margin-top: 25px;"  >
                                          <a style="border-radius: 15px;" class="btn  btn-dark"  href="{{ route('addemployee') }}" >  <i class="fas fa-plus-circle" style="margin-right: 10px;"></i>Add Employee</a>
                                    </div>
                               </div><!-- /.col -->
                        </div><!-- /.row -->
                  </div><!-- /.container-fluid -->
                 
            </div>
        @if (Auth::user()->active == 1)
         


            <div class="row">
                <div class="col-12">
                    

                        <!-- /.card-header -->
                        <div class="card-body">
                              <table id="datatable_employee" class="table table-bordered">
                                    <thead>
                                        <tr style="background-color: black; color: white;">
                                            <th> ID</th>
                                            <th>Name</th>
                                            <th>phone</th>
                                            <th>address</th>
                                            <th>email</th>
                                            <th>Roles</th>
                                            <th style="width:120px">Funtion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($users))
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td>{{ $user->id }}</td>
                                                    <td>{{ $user->fullname }} </td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @if ($user->active == 1)
                                                            <span>Admin</span>
                                                        @else
                                                            <span>Nhan vien</span>
                                                        @endif
                                                    </td>
                                                    <td style="padding: 0px 44px; padding-top: 4px;">
                                                       
                                                        <a class="btn btn-primary btn-sm" href="{{ route('edit_employee', ['id' => $user->id]) }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a onclick="return confirm('bạn có chắc muốn xóa?')" class="btn btn-danger btn-sm"
                                                            href="{{ route('delete', ['id' => $user->id]) }}">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                    
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4">khong co nguoi dung</td>
                                            </tr>
                                        @endif
                    
                                    </tbody>
                                </table>
                        </div>
                        <!-- /.card-body -->
                   
                    <!-- /.card -->


                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.container-fluid -->
        @elseif(Auth::user()->active == 0)
            <div>
                chỉ admin mới có thể truy cập
            </div>
        @endif
    </div>
@endsection
