<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User ;

class SignUpController extends Controller
{

    public function index(){
        $users = User::all() ;
        return view('user.list')->with('userList', $users);
    }

    public function create(){
        return view('signup.index');
    }
    
         
        public function signup(Request $req)
        {
            $user = new User;
            $user->fullname = $req->fullname;
            $user->username = $req->username;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->confirmpassword = $req->confirmpassword;
              $user->address = $req->address;
                $user->city = $req->city;
                  $user->country = $req->country;
            $user->companyname = $req->companyname;
              $user->phone = $req->phone;
            $user->dept = $req->dept;
            $user->cgpa = '4';
            $user->type = 'user';
            $user->profile_img = '';
            $user->save();
            return redirect()->route('user.index');
         //return view('user.list')->with('userList', $user);
        }
}
