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
      var_dump(Sentinel::authenticate($request->all()));
    }
}
