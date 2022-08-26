<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request){
        //validation avec AdminLoginRequest

        $remember_me = $request->has('remember_me')? true : false;

        $email=$request->input("email");
        $pwd=$request->input("password");
        // $user=$request->user;
        $user='admin';

        if (auth()->guard($user)->attempt(['email' => $email, 'password' => $pwd],$remember_me))
         {

            return redirect()->route($user.'.dashboard');
        }
        return redirect()->back()->with('error',' Error !! ');

    }

    public function logout(){
        Auth::logout();
        return view('Dashboard.auth.login');
    }

}
