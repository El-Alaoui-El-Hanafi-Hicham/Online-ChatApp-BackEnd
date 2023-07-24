<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
   
 
     public function register(Request $request){
        $credentials =  $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|string',
        ]);
        $user=User::create([
            'name'=>$credentials['name'],
            'email'=>$credentials['email'],
            'password'=>bcrypt($credentials['password'])
        ]);
     
        $token = $request->user()->createToken($request->name);
                return response([$token,$request->email,$request->password,"text"=>"logged Succesfully"]);

     } 
   
     

        /**
         * Handle an authentication attempt.
         */
        public function authenticate(Request $request)
        {
            $credentials = $request->validate([
                'email' => 'required|string',
                'password' => 'required|string',
            ]);
            // $credentials['password'] = bcrypt($request->password);
            if (Auth::attempt($credentials)) {
     
                $token = $request->user()->createToken($request->name);
                return response(['token' => $token->plainTextToken,'email'=>$request->email,"status"=>"logged Succesfully"]);
            }
             return   response(["status"=>"error",]);
        }
    
}
