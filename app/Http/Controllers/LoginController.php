<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\User ;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(UserRequest $req)
    {
        /*Accept all version*/
        $validation = Validator::make($req->all(), [
    		'email' => 'required',
    		'password'=> 'required|min:8'
    	]);

    	if($validation->fails()){
             return back()
                       ->with('errors',$validation->errors())
                       ->withInput();              
    		//return redirect()->route('login.index')->with('errors', $validation->errors());
    	}
        /*Accept all version*/
        $user = User::where('email',$req->email)
             ->where('password',$req->password) 
             ->first();         
        
        if(count((array)$user) > 0){
            $req->session()->put('email', $req->email);
            return redirect('/home');
        }else{
            $req->session()->flash('msg', 'invaild email or password');
            return redirect('/login');
        }
    }
    
}
