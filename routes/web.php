<?php


use \App\Http\Controllers\Admin\Users\LoginController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CustomerController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // Route::get('/du', function () {
    //     return view('login');
    // });

 Route::get('admin/users/login',[LoginController::class,'index1'])->name('login');
 Route::post('admin/users/login/store',[LoginController::class,'store1']); 
 
 Route::get('admin/users/logout',[LoginController::class,'logout'])->name('logout');


 Route::middleware(['auth'])->group(function () {

   Route::prefix('admin')->group(function(){
            Route::get('/users/index',[MainController::class,'index2'])->name('admin');
            Route::get('/users/addemployee',[MainController::class,'getAddemployee'])->name('addemployee');
            Route::post('/users/addemployee',[MainController::class,'store']);
            // route cho listemployee
            Route::get('/users/listemployee',[MainController::class,'getListemployee'])->name('listemployee');
            
          // edit listempoyee
            Route::get('/users/edit_employee/{id}',[MainController::class,'getEdit_employee'])->name('edit_employee');
            Route::post('/users/edit_employee',[MainController::class,'postEdit_employee'])->name('postedit');
            // delete
            Route::get('/users/delete/{id}',[MainController::class,'getdelete'])->name('delete');

          // add custommer
          Route::get('/users/addCustomer',[CustomerController::class,'getAddCustomer'])->name('addCustomer');
          Route::post('/users/addCustomer',[CustomerController::class,'store2']);
          //list Customer
          Route::get('/users/listCustomer',[CustomerController::class,'getListCutomer'])->name('listCustomer');
          Route::get('/users/addemail_customer/{id}',[CustomerController::class,'getemail'])->name('customer_getemail');
          Route::post('/users/addemail_customer',[CustomerController::class,'postemail'])->name('customer_postemail');
          Route::delete(('/users/delete'),[CustomerController::class,'getdelete'])->name('customer_delete');
          Route::get(('/users/edit/{id}'),[CustomerController::class,'getEdit'])->name('customer_edit');
          Route::post(('/users/edit'),[CustomerController::class,'postEdit'])->name('post_customer_edit');

   });
    
 });
 
