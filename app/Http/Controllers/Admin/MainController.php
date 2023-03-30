<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\RequestmployeeFormRequest;
use App\Http\Requests\AddEmployee;
use App\Http\Requests\AddEmployeeFormRequest;
use App\Http\Requests\EditEmployeeFormRequest;
use Illuminate\Http\Request;
use App\Http\services\EmployeeService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use App\Models\User;

class MainController extends Controller
{
    protected $EmployeeService;
    public function __construct(EmployeeService $EmployeeService)
    {
        $this->EmployeeService=$EmployeeService;
    }
        
         public function index2(){
            $title='Main Home';
            return view('admin.users.home',compact('title'));
        }
        public function getAddemployee(){
           
            $title='Add Employee';
            return view('admin.users.Addemployee',compact('title'));
        }
        
        public function store(AddEmployeeFormRequest $request)
        {
            //$result = $this->EmployeeService->getAddemployee($request);
            $result = $this->EmployeeService->getAddemployee($request);
            // dd($request->input());
           
           // $user=Auth::user();
            return redirect()->route('listemployee');
        }
        public function getListemployee(){
            $title='List Employee';

            $users= $this->EmployeeService->getAll();
            return view('admin.users.ListEmployee',compact('title','users'));
        }
        
        public function getEdit_employee(Request $request, $id=0){
            $title='Update Employee';
            if(!empty($id)){
                $userDetail= $this->EmployeeService->getDetail($id);
                if(!empty($userDetail[0])){
                    $userDetail= $userDetail[0];
                }
                else{
                    return redirect()->route('admin')->with('error','lien ket khong ton tai');
                }

            }else{
                return redirect()->route('admin')->with('error','lien ket khong ton tai');
            }

            return view('admin.users.editEmployee',compact('title','userDetail') );
            
        }
        public function postedit_employee(EditEmployeeFormRequest $request,$id=0){
            $result = $this->EmployeeService->getEditemployee($request,$id);
            return redirect()->route('listemployee');
        }

        public function getdelete($id=0){
            if(!empty($id)){
                $userDetail= $this->EmployeeService->getDetail($id);
                if(!empty($userDetail[0])){
                   $delete= $this->EmployeeService->deleteUser($id);
                   if($delete){
                    FacadesSession::flash('success','xóa người dùng thành công');
                   }
                   else{
                    FacadesSession::flash('error','xóa người dùng thất bại');
                   }
                } 
                else{
                    FacadesSession::flash('error','người dùng không tồn tại');
                }

            }else{
                FacadesSession::flash('error','người dùng không tồn tại');
            }
            return redirect()->route('listemployee');
        }

       
}

