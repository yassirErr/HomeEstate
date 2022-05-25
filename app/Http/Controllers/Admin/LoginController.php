<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function getLogin(){
        return view('dashboard.auth.login');
    }

    //     public function save(){

        // $admin = new  App\Models\Admin();
        // $admin -> name ="Yassir";
        // $admin -> email ="Yassir@gmail.com";
        // $admin -> password = bcrypt("yassir");
        // $admin -> save();

    // }
    
    public function login(AdminLoginRequest $request){

        // return $request;
        
 

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
           
            return redirect()->route('admin.dashboard')->with(['success'=>'Login successfully']);
        }

       return Redirect()->route('get.admin.login')->with(['error'=>'Error In Data']); 
       
    }



    public function logout(){
        $guard = $this->getGuard();
        $guard ->logout();
        return redirect()->route('admin.login');
    }

    private function getGuard()
    {
        return auth('admin');
    }

    
}
