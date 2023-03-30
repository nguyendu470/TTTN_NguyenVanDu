<?php

namespace App\Http\services;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EmployeeService

{

    public function getAll(){
        return DB::table('users')->orderBy('id', 'ASC')->get();
    }

    public function getAddemployee($request)
    {
        try{
           
            User::create([
                'fullname'=>(string) $request->input('name'),
                'phone'=>(int) $request->input('phone'),
                'address'=>(string) $request->input('address'),
                'email'=>(string) $request->input('email'),
                'username'=>(string) $request->input('usersname'),
                'password'=>(string) Hash::make($request->input('password')),
                'confilmpassword'=>(string) Hash::make($request->input('confilmpassword')),
                'active'=>(int)$request->input('active')
               
             
               

            ]);
           
            
             FacadesSession::flash('success','thêm Employee thành công');
             
            
            
        }
        catch(\Exception $err){
            
            FacadesSession::flash('error',$err->getMessage());
            return false;

        }
        return true;
    }
    public function getDetail($id){
        return DB::table('users')->where('id',$id)->get();

    }
    public function getEditemployee($request,$id){
        try{
           
            DB::table('users')->where('id',$id)->update([
                'fullname'=>(string) $request->input('name'),
                'phone'=>(int) $request->input('phone'),
                'address'=>(string) $request->input('address'),
                'email'=>(string) $request->input('email'),
                'username'=>(string) $request->input('usersname'),
                'active'=>(int)$request->input('active')
            ]);
             FacadesSession::flash('success','cập nhật Employee thành công');
        }
        catch(\Exception $err){
            
            FacadesSession::flash('error',$err->getMessage());
            return false;

        }
        return true;
    }

    public function deleteUser($id){
       return DB::table('users')->where('id',$id)->delete();
    }

}