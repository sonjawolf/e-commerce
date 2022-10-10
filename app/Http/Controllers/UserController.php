<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        //return $request->input();

        return view('login');

    }
    public function login1(Request $request){
        $user=User::where(['email'=>$request->email])->first();
        if(!$user|| !Hash::check($request->password,$user->password)){
            return "Username or password is not mached";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/p');
        }
    }
}
