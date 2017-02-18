<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idtype;
use App\Area;
use App\Purpose;
use App\Guest;
class GuestController extends Controller
{
    public function index()
    {
         $idtype = Idtype::all();
         $areas = Area::all();
         $purposes = Purpose::all();

         return view('layouts/depan' , [
             "types" => $idtype,
             "areas" => $areas,
             "purposes" => $purposes
         ]);
    }
    public function simpan(Request $request)
    {
        $path = "images/";
        $images = $this->save_base64_image($request->photo, $request->name_guest, $path);
        
        $guest = new Guest;
        $guest->card_id = $request->manual_card_no;
        $guest->idtype_id = $request->id_type;
        $guest->purpose_id = $request->purpose;
        $guest->area_id = $request->area;
        $guest->nomor_id = $request->manual_card_no;
        $guest->name = $request->name_guest;
        $guest->company = $request->company;
        $guest->duration = $request->duration;
        $guest->partner = $request->partner;
        $guest->excourt = $request->excourt;
        $guest->photo = $path . $images;
        $guest->save();
        return redirect('/');
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
