<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userrcom;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(Request $request){

        if ($request->session()->has('User_login')) {
            return redirect('/feed');
        }else{
            return view('login');
        }
    }

    public function addUser(Request $request){
       
        $request->validate([
            'email'=>'required',
            'password'=>'required|min:4'
        ]);

        $datauser=Userrcom::where(['email'=>$request->email])->first();

        if($datauser){
            if (Hash::check($request->password,$datauser->password)) {
                $request->session()->put('User_login',true);
                $request->session()->put('User_id',$datauser->id);
                return redirect('/feed');
            }else{
                return view('login')->with('emailerror','password is wrong');   
            }
        }else{
            return view('login')->with('emailerror','You entered wrong email');
        }

    }

    public function feedshow(){
       
       return view('master');

    }


}
