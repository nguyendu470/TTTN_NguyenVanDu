<?php

namespace App\Http\services;

use App\Models\Customer;
use App\Models\CustomerMail;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CustomerService{


    public function getAll(){
        return DB::table('Customers')->orderBy('id', 'ASC')->get();
        
    }
    public function getMail(){
        return DB::table('Customer_mails')->orderBy('id', 'ASC')->get();
    }

    public function getAddCustomer($request)
    {
        try{
           
           $id= Customer::insertGetId([
                'employee_id'=>(int) $request->input('employee_id'),
                'name'=>(string) $request->input('name'),
                'phone'=>(int) $request->input('phone'),
                'address'=>(string) $request->input('address'),
                'status'=>(int)$request->input('status')
            ]);
            CustomerMail::create([
                'CustomerID'=>$id,
                'email'=>(string) $request->input('email'),
            ]);


           
             FacadesSession::flash('success','thêm Customer thành công');
                 
        }
        catch(\Exception $err){
            
            FacadesSession::flash('error',$err->getMessage());
            return false;

        }
        return true;
    }

    public function customer($id){
        return DB::table('Customers')->where('id',$id)->get();
    }
    public function postemail($request)
    {
        if((int)$request->input('CustomerID')==0){
            FacadesSession::flash('error','Bạn chưa chọn khách hàng');
        }else{
            try{
                CustomerMail::create([
                    'CustomerID'=>(int)$request->input('CustomerID'),
                    'email'=>(string)$request->input('addemail'),
                    ]);
                    FacadesSession::flash('success','Thêm thành công!');
                    
                }
                catch (\Exception $err){
                    FacadesSession::flash('error','Thêm không thành công!');
                    return false;
                    
                }
        }
        
    }

    public function deletechecked($request)
    {
         $ids=$request->id;
         DB::table('customers')->whereIn('id',$ids)->delete();
         DB::table('customer_mails')->whereIn('CustomerID',$ids)->delete();
         FacadesSession::flash('success','Xóa thành công!');
        }

        public function editcustomer($id){
            return DB::table('customers')->where('id',$id)->get();
            // return DB::table('customer')->get();
        }

        public function editcustomer_mail($id){
            return DB::table('customer_mails')->where('CustomerID',$id)->get();
            // return DB::table('customer')->get();
        }
        
        public function update($request){
            $id=(int)$request->input('mail_id');
            if($id==0){
                FacadesSession::flash('error','bạn chưa chọn email cần cập nhật');
            }else{
                try{
                    $update = DB::table('customer_mails')->where('id', $id)->update([
                        'email'=>(string)$request->input('updatemail'),
                ]);
                    FacadesSession::flash('success','cập nhật thành công');
                    
                }
                catch (\Exception $err){
                    FacadesSession::flash('error','Thêm không thành công!');
                    return false;
                    
                }
                return true;
            }
            
        }


}