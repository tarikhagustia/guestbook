<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Card;
use App\Guest;
class checkoutController extends Controller
{
    public function index()
    {
      return view('checkout');
    }
    public function postData(Request $request)
    {
      $data = Card::where('uid' , $request->card_id)->get();
      // foreach ($data as $key => $value) {
      //   dd($value->guest->name);
      // }
      // dd($data->guest->name);
      return view('checkoutdetails', ['datas' => $data]);
    }
    public function postCheckout(Request $request)
    {
      $guest = Guest::find($request->id);
      $guest->checkout_time = date('Y-m-d H:i:s');
      $guest->save();
      return redirect('/thanks');
    }
}
