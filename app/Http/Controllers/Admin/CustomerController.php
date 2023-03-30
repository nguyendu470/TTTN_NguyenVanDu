<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\EmailRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCustomerRequest;
use App\Http\Requests\Customer\EmailRequest as CustomerEmailRequest;
use App\Http\Requests\EditMailRequest;
use App\Http\services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session as FacadesSession;
use App\Models\User;


class CustomerController extends Controller
{
    protected $CustomerService;
    public function __construct(CustomerService $CustomerService)
    {
        $this->CustomerService=$CustomerService;
    }


    public function getAddCustomer(){
        $title='Add Employee';
        return view('admin.users.AddCustomer',compact('title'));   
    }
    public function store2(AddCustomerRequest $request)
        {
            $result = $this->CustomerService->getAddCustomer($request); 
            return redirect()->route('listCustomer');
        }
    
    public function getListCutomer()
    {
            $title='List Customer';

            $customer= $this->CustomerService->getAll();
            $mail= $this->CustomerService->getMail();
            
            return view('admin.users.ListCustomer',compact('title','customer','mail'));
     }

     public function getemail($id=0){
        $customer=$this->CustomerService->customer($id);
        return response()->json([
            
            'customer'=>$customer,

        ]);
    }

    public function postemail(EmailRequest $request){
        $this->CustomerService->postemail($request);
        return redirect()->route('listCustomer');
        // dd($request->input());
    }
    public function getdelete(Request $request){
        $this->CustomerService->deletechecked($request);
        // $arr = [3, 7, 9, 5];
        // return response()->json([
        //     'data' => $arr,
        //     'message' => 'xoas thanh cong',
        //     'error' => false,
        //     'success'=>"Đã xóa thành công!"
        // ]);
        return redirect()->route('listCustomer');
    }

    public function getEdit($id=0){
        $editcustomer=$this->CustomerService->editcustomer($id);
        $editcustomer_mail=$this->CustomerService->editcustomer_mail($id);
        return response()->json([
            'status'=>200,
            'customer'=>$editcustomer,
            'customer_mail'=>$editcustomer_mail
        ]);
        // dd($edit);
        // return view('pages.listcustomer',compact('editcustomer','editcustomer_mail'));
    }

    public function postEdit(EditMailRequest $request){
        $this->CustomerService->update($request);
        return redirect()->route('listCustomer');
    }



}
