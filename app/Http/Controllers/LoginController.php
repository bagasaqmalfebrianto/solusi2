<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index(){
        return view('login.index',[
            'title' =>'login',
            'active'=>'login'
        ]);
       }

       public function authenticate(Request $request){

        //$credentials ini kelas bebas
        $credentials = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);
        //Auth::attempt($credentials) ini maksudnya
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //regenerate() untuk mencegah hacking session fixation dengan cara di regenerae

            // dd($request->email);
            // dd($request->password);
            return redirect('/dashboard');
        }

        return back()->with('loginError','Login Failed');
        //back() kembali ke login
       }


       public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');

       }
}
