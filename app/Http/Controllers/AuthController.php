<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;


class AuthController extends Controller
{
    public function getLoginPage(){
        return view('admin.login');
    }

    public function login(LoginRequest $request){

        $data = [
            'login' => $request->login,
            'password' => $request->password
        ];

        //return $data;

        if(Auth::attempt($data)){

        return redirect('getMarketingListPage');

        } else {
            return back()->with(['login_or_password'=>true]);
        }
    }

    public function user_logout(){
        auth()->logout();

        return back();
    }
}
