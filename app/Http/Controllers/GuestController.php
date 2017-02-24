<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idtype;
use App\Area;
use App\Purpose;
use App\Guest;
use App\Card;
class GuestController extends Controller
{
    public function index()
    {
         $idtype = Idtype::all();
         $areas = Area::all();
         $purposes = Purpose::all();

         return view('guest' , [
             "types" => $idtype,
             "areas" => $areas,
             "purposes" => $purposes
         ]);
    }
    public function contoh()
    {
         $idtype = Idtype::all();
         $areas = Area::all();
         $purposes = Purpose::all();

         return view('layouts/contoh' , [
             "types" => $idtype,
             "areas" => $areas,
             "purposes" => $purposes
         ]);
    }
    public function simpan(Request $request)
    {
        $this->validate($request, [
            'card_id' => 'required',
            'idtype_id' => 'required',
            'nomor_id' => 'required',
            'name' => 'required',
            'company' => 'required',
            'purpose_id' => 'required',
            'area_id' => 'required',
            'duration' => 'required',
            'excourt' => 'required',
        ]);
        $path = "images/";
        $images = $this->save_base64_image($request->photo, $request->name, $path);
        $guest = new Guest;
        $guest->card_id = $this->check_card($request->card_id);
        $guest->idtype_id = $request->idtype_id;
        $guest->purpose_id = $request->purpose_id;
        $guest->area_id = $request->area_id;
        $guest->nomor_id = $request->nomor_id;
        $guest->name = $request->name;
        $guest->company = $request->company;
        $guest->duration = $request->duration;
        $guest->partner = $request->partner;
        $guest->excourt = $request->excourt;
        $guest->photo = $path . $images;
        $guest->save();
        return redirect('/');
    }
    private function check_card($card_id)
    {
      $card = Card::where('uid', 1010)->get();
      if(count($card) <= 1)
      {
        $card = new Card;
        $card->uid =  $card_id;
        $card->is_active = true;
        $card->save();

        return $card->id;
      }else{
        $card = Card::where('uid', 1010)->fisrt();
        return $card->id;
      }
    }
    public function save_base64_image($base64_image_string, $output_file_without_extentnion, $path_with_end_slash="" ) {
        $output_file_with_extentnion = "";
        //usage:  if( substr( $img_src, 0, 5 ) === "data:" ) {  $filename=save_base64_image($base64_image_string, $output_file_without_extentnion, getcwd() . "/application/assets/pins/$user_id/"); }
        //
        //data is like:    data:image/png;base64,asdfasdfasdf
        $splited = explode(',', substr( $base64_image_string , 5 ) , 2);
        $mime=$splited[0];
        $data=$splited[1];

        $mime_split_without_base64=explode(';', $mime,2);
        $mime_split=explode('/', $mime_split_without_base64[0],2);
        if(count($mime_split)==2)
        {
            $extension=$mime_split[1];
            if($extension=='jpeg')$extension='jpg';
            //if($extension=='javascript')$extension='js';
            //if($extension=='text')$extension='txt';
            $output_file_with_extentnion.=$output_file_without_extentnion.'.'.$extension;
        }
        file_put_contents( $path_with_end_slash . $output_file_with_extentnion, base64_decode($data) );
        return $output_file_with_extentnion;
    }
}
