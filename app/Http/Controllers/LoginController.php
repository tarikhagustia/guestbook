<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function index()
    {
      return view('auth/login');
    }
    public function postLogin(Request $request)
    {
      Sentinel::authenticate($request->all());

      if(Sentinel::check()){
        return redirect('/home');
      }
    }
    public function logout()
    {
      Sentinel::logout();
      return redirect('/home');
    }
}
