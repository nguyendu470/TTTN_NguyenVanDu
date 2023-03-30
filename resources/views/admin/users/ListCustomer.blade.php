@extends('index')

@section('content')
@if(Session::has('error'))
    <div class="alert alert-danger">
        {{Session::get('error')}}
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif
<div class="card card-primary" style="margin:20px; border-radius: 15px;">
    <div class="content-header" style="display: flex;">
          <div class="container-fluid">
                <div class="row mb-2">
                      <div class="col-sm-6">
                            <h1 class="m-0" style="font-weight: 600;">List Customer</h1>
                            <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                  <li class="breadcrumb-item active">List Customer</li>
                            </ol>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                            <div style="border-radius: 4px; float: right; margin-top: 25px;"  >
                                  <a style="border-radius: 15px; width: 157px; " class="btn  btn-dark addcus"  href="#" id='addcustomer' >  <i class="fas fa-plus-circle" style="margin-right: 10px;"></i>Add Email</a>
                                  <a style="border-radius: 15px;" class="btn  btn-dark editcus"  href="#" id='editcustomer'>  <i class="fas fa-edit" style="margin-right: 10px;"></i>Edit</a>
                                  <a style="border-radius: 15px;  " class="btn  btn-dark"  href="{{route('listCustomer')}}" id="deletechecked" >  <i class=" fas fa-trash" style="margin-right: 10px;"></i>Delete</a>

                                </div>
                       </div><!-- /.col -->
                </div><!-- /.row -->
          </div><!-- /.container-fluid -->
         
    </div>
    <div class="row">
        <div class="col-12">
                <!-- /.card-header -->
                <div class="card-body">
                    <table  id="myTable" class="table table-bordered">
                        <thead>
                              <tr style="background-color: black; color: white;">
                                    <th><input type="checkbox" id="checkall"></th>
                                    <th> ID</th>
                                    <th>Customer Name</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>email</th>
                                    <th>Status</th>
                                    {{-- <th style="width:120px">Funtion</th>   --}}
                              </tr>
                        </thead>
                        <tbody>
                              @if (!empty($customer))
                              @foreach ($customer as $key=>$user)
                              <tr >
                                  <td>
                                      <input type="checkbox" name="id" class="checkbox" value="{{$user->id}}">
                                  </td>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}} </td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td>
                                          @foreach($mail as $item)
                                          @if(($user->id)==($item->CustomerID))
                                          {{$item->email}} <br> 
                                          @endif
                                          @endforeach
                                    </td>
                  
                                    <td>@if($user->status==1)
                                          
                                                <span>Active</span>
                                          @else
                                                <span>Deactive</span>
                                          @endif
                                          </td>
                                    {{-- <td style="padding: 0px 44px; padding-top: 4px;">
                                          <a class="btn btn-primary btn-sm addcus" href="#" id='addcustomer'>
                                                <i class="fas fa-plus-circle"></i>
                                          </a>
                                          <a class="btn btn-primary btn-sm editcus" href="#" id='editcustomer'>
                                                <i class="fas fa-edit"></i>
                                          </a>
                                          
                                    </td> --}}
                                   
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

</div>
{{-- testassssssssssssssssssssssssssssssssssssssssssssssssss --}}
{{-- <div class="card card-primary" style="margin:20px">
      <a class="btn btn-danger btn-sm" href="{{route('listCustomer')}}" id="deletechecked">
            <i class="fas fa-trash"></i>
      </a>
<div class="content-header">
      <div class="container-fluid">
            <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0">List Customer</h1>
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
<table  id="myTable" class="table table-bordered">
      <thead>
            <tr>
                  <th><input type="checkbox" id="checkall"></th>
                  <th> ID</th>
                  <th>Customer Name</th>
                  <th>phone</th>
                  <th>address</th>
                  <th>email</th>
                  <th>Status</th>
                  <th style="width:120px">&nbsp;</th>

                 
            </tr>
      </thead>
      <tbody>
            @if (!empty($customer))
            @foreach ($customer as $key=>$user)
            <tr >
                <td>
                    <input type="checkbox" name="id" class="checkbox" value="{{$user->id}}">
                </td>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}} </td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->address}}</td>
                  <td>
                        @foreach($mail as $item)
                        @if(($user->id)==($item->CustomerID))
                        {{$item->email}} <br> 
                        @endif
                        @endforeach
                  </td>

                  <td>@if($user->status==1)
                        
                              <span>Active</span>
                        @else
                              <span>Deactive</span>
                        @endif
                        </td>
                  <td>
                        <a class="btn btn-primary btn-sm addcus" href="#" id='addcustomer'>
                              <i class="fas fa-plus-circle"></i>
                        </a>
                        <a class="btn btn-primary btn-sm editcus" href="#" id='editcustomer'>
                              <i class="fas fa-edit"></i>
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
</section> --}}
 {{-- model addCustomer --}}
 <div id="addModal"  class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 15px;">
          
              <div class="modal-header">
                  <h3 class="modal-title">Add Email</h3>
                  <button onclick="$('#addModal').modal('hide')" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('customer_postemail')}}" method="POST">
                  {{ csrf_field() }}
                  <div class="modal-body">
                      <div class="form-group row">
                          <label style="max-width: 30%; flex-basis: 30%;" for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
                          <div style="max-width: 70%" class="col-sm-10">
                              <select name="CustomerID" class="form-control" id="exampleInputRoll" >
                                  {{-- <option value="0">Chọn customer</option> --}}
                                  @if(!empty($customer))
                                  @foreach($customer as $key=>$item)
                                  <option value="{{$item->id}}">{{$item->name}}</option>
                                  @endforeach
                                  @else
                                  <option value="null">Không có khách hàng</option>
                                  @endif
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label style="max-width: 30%; flex-basis: 30%;" for="inputPassword3" class="col-sm-2 col-form-label">Add Email</label>
                          <div style="max-width: 70%" class="col-sm-10">
                              <input type="email" class="form-control" name="addemail" id="inputPassword3" placeholder="Nhập Email" required>
                          </div>
                      </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer">
                      <button type="submit"   class="btn btn-lg btn-dark">Submit</button>
                      <button type="button" class="btn btn-light btn-lg" onclick="$('#addModal').modal('hide')">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
              </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
{{-- test modal --}}
    <div id="testModal"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="border-radius: 15px;">>
          
              <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Add Email</h3>
                  <button onclick="$('#testModal').modal('hide')" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="{{route('customer_postemail')}}" method="POST">
                  {{ csrf_field() }}
                  <div class="modal-body">
                      <div class="form-group row">
                          <label style="max-width: 30%; flex-basis: 30%;" for="inputEmail3" class="col-sm-2 col-form-label">Customer Name</label>
                          <div style="max-width: 70%" class="col-sm-10">
                              <select name="CustomerID" class="form-control" id="listcustomeradd" >
                                  <option value="null">Chọn customer</option>
                                  <option value="null">Không có customer</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label style="max-width: 30%; flex-basis: 30%;" for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                          <div style="max-width: 70%" class="col-sm-10">
                              <input type="email" class="form-control" name="addemail" id="inputPassword3" placeholder="Nhập Email" required>
                          </div>
                      </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-lg btn-dark">Submit</button>
                      <button type="button" class="btn btn-light btn-lg" onclick="$('#testModal').modal('hide')">Cancel</button>
                  </div>
                  <!-- /.card-footer -->
              </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

{{-- model edit --}}
<div id="editModal"  class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content" style="border-radius: 15px;">
            
                <div class="modal-header">
                    <h3 class="modal-title">Edit Email</h3>
                    <button onclick="$('#editModal').modal('hide')" type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {{-- <input type="text" id="checkbox" name="checkid" value=""> --}}
                <form class="form-horizontal" id="form_editcustomer" action="{{route('post_customer_edit')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body">
                          <div class="form-group row">
                              <label style="max-width: 30%; flex-basis: 30%;" for="customername" class="col-sm-2 col-form-label">Customer Name</label>
                              <div style="max-width: 70%" class="col-sm-10">
                                  <input type="text" class="form-control" name="customer_name" id="customername" placeholder="Customer Name" readonly>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label style="max-width: 30%; flex-basis: 30%;" for="inputEmail3" class="col-sm-2 col-form-label">Email Edit</label>
                              <div style="max-width: 70%" class="col-sm-10">
                                  <select name="mail_id" class="form-control" id="listcustomermail" >
                                      {{-- <option value="0">Chọn mail cần update</option> --}}
                                  </select>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label style="max-width: 30%; flex-basis: 30%;" for="customername" class="col-sm-2 col-form-label">Email Edited Into</label>
                              <div style="max-width: 70%" class="col-sm-10">
                                  <input type="email" class="form-control" name="updatemail" id="update_mail" placeholder="Nhập Email" required>
                                  <span id="username_error"></span>
                              </div>
                          </div>
                      </div>
                    <!-- /.card-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-lg btn-dark">Save</button>
                        <button type="button" class="btn btn-light btn-lg" onclick="$('#editModal').modal('hide')">Cancel</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
