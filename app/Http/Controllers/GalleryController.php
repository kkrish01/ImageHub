<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GalleryController extends Controller
{
    public function SaveImage(Request $data){
        $userid = session('userid');
        $image = $data->file('image');
        $type = $data->type;
        $folder = "uploads/" . $userid . "/";
        if(!file_exists($folder)){
            mkdir($folder,0777,true);
        }

        $extension = $image->getClientOriginalExtension();

        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
        $text = "";
        for($x = 0; $x < 5; $x++){
            $random = rand(0,61);
            $text .= $array[$random];
        }
        $picture = $folder . $text . "." . $extension;
        $image->move($folder, $picture);

        DB :: table("images")->insert([
            'userid' => $userid,
            'image_name' => $picture,
            'type' => $type,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        echo "done";
    }

    public function MyGallery(){
        $userid = session('userid');
        $images = DB::table('images')->where('userid','=',$userid)->get();
        return view('gallery', ['images' => $images]);
    }
}
