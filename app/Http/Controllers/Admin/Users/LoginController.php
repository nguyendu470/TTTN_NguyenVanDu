<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as FacadesSession;

class LoginController extends Controller
{

    public function index1(){
        return view('admin.users.login2',[
            'title'=>'dang nhap he thong'
        ]);
    }
    
    public function store1(Request $request){
       
        $this->validate($request,[
                'email'=>'required|email:filter', 
                'password'=> 'required',
                'g-recaptcha-response'=>'required|captcha'
         ]);

        
        if(Auth::attempt(['email' => $request->input('email'),
                         'password'=> $request->input('password')

         ], $request->input('remember')  
         )){

            return redirect()-> route('admin');
        }
        
        FacadesSession::flash('error', 'Email hoặc mật khẩu không đúng');
       
        return redirect()-> back();


    }

    //logout
    public function logout(){
        if(auth::logout()){
            
            return redirect('admin/users/login');
        }
        return redirect()->back();
    }
}
