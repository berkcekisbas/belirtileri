<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function Login()
    {
        if(Auth::check())
        {
            return redirect('site/dashboard');
        }

        return view('Site.Auth.login');
    }

    public function dashboard()
    {
        return Auth::user()->name;
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



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],true)) {
            // Authentication passed...
            return redirect()->intended('site/dashboard');
        } else {

            return redirect('site/auth/login')->withErrors('Giriş Başarısız. !');
        }



    }

    public function Logout()
    {

            Auth::logout();


        return redirect('site/auth/login');


    }
}
