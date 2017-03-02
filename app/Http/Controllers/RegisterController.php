<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class RegisterController extends Controller
{
    public function index()
    {
      return view('auth.register');
    }
    public function postRegister(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|unique:users',
        'password' => 'required',
        'password_confirmation' => 'required|same:password'
      ]);
      $user = Sentinel::registerAndActivate($request->all());

      return redirect('/home');
    }
}
