<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthorizedController extends Controller
{
    public function login(){
        return view('Admin.login');
    }




    public function check_login(Request $request){

        $email = request('email');
        $password = Hash::check(request('password'), User::select('password')->where('email', $email)->get());

        $select_email = User::where('email', $email)->first();
        $select_password = User::where('password', $password)->first();

        if($select_email && $select_password){
            return redirect()->to('admin/dashboard');
        }else{
            return redirect()->to('admin/login');
        }
        // $password = Hash::check($value, $hashedValue);
        // if()
        // return view('Admin.login');
    }

    public function not_authorized(){
        return view('Admin.not_authorized');
    }
}
