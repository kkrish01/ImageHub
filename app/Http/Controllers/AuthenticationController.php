<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function Signup(Request $data){
        $name = $data->name;
        $email = $data->email;
        $password = $data->password;
        
        $user = DB::table('users')->where('email','=',$email)->get();
        if (count($user) == 0){
            $userid = DB :: table("users")->insertGetId([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            session(['userid' => $userid]);
        }else{
            echo 1;
        }
    } 
    
    public function Login(Request $data){
        $email = $data->email;
        $password = $data->password;
        $user = DB::table('users')->where('email','=',$email)->where('password','=',$password)->get();
        if (count($user) == 0){
            echo 1;
        }else{
            session(['userid' => $user[0]->id]);
        }
    }
}
