<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function showlog()
    {
         return view('login');
    }

    public function login()
    {
        $datos = $this->validate(request(),[
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($datos))
        {
            return redirect()->route('application');
        }
        return back()
        ->withErrors([$this->username() => trans('auth.failed')])
        ->withInput(request([$this->username()]));
    }
    public function username()
    {
        return 'name';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
