<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function Login()
    {
        if(Auth::guard('admin')->check())
        {
            return redirect('admin/dashboard');
        }

        return view('Admin.Auth.login');
    }

    public function dashboard()
    {
        return view('Admin.dashboard');
        //return Auth::guard('admin')->user()->name;
    }

    public function Authenticate(Request $request)
    {



        $messages = [
            'email.required' => 'Lütfen bir mail adresi girin !',
            'email.email' => 'Lütfen geçerli bir mail adresi girin !',
            'password.required' => 'Lütfen şifre girin !',
        ];

        $rules = array(
            'email' => 'required|email',
            'password' => 'required|',
        );


        $this->validate($request, $rules,$messages);



        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],true)) {
            // Authentication passed...
            return redirect()->intended('admin/dashboard');
        } else {

            return redirect('admin/auth/login')->withErrors('Giriş Başarısız. !');
        }



    }

    public function Logout()
    {

            Auth::guard('admin')->logout();


        return redirect('admin/auth/login');


    }
}
