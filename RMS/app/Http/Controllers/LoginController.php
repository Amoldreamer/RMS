<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){
        $username = $request->username;
        $password = $request->password;

        $users = User::all();

        foreach($users as $user)
        {
            if($user->username === $username && $user->password === $password){
            //  return view('dashboard',compact('username',$username));
            session_start();
            $_SESSION['username'] = $username;
                return redirect()->intended('dashboard');
             }
          }
            {
                $message = 'Incorrect username or password. Try again!';
                return view('login',array('message'=>$message));
            }
        }
}
