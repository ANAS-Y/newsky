<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
class UserController extends Controller
{
    //user loging function
    function login(request $req){
        $user = User::where(['email'=>$req->email])->first();
        if (!$user){
            $message= ['status'=>'error','message'=>'User with this email Does not Exist'];
            $req->session()->put('message',$message);
        return back();
        }
        if(!Hash::check($req->password,$user->password))
        {
            $message= ['status'=>'error','message'=>'Incorrect Email or Password'];
            $req->session()->put('message',$message);
        return back();
        }
        
        else{

            if($user->category=="admin")
            {
                $req->session()->put('admin',$user);
                return redirect('/home');
             }

            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    function registerUser(Request $req){
        //insert user
        DB::table('users')->insert([
            'name'=>$req->fullname,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'category'=>'customer',
            'password'=>Hash::make($req->Password)
        ]);
        $user = User::where(['email'=>$req->email])->first();
        $req->session()->put('user',$user);
        return redirect('/'); 
    }
}
