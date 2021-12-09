<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin(){
        return view('login.login_form');
    }

    /**
     * @param App\Http\Requests\LoginFormRequest
     */

    public function login(LoginFormRequest $request){
     $credentials = $request->only('email','password');
     if(Auth::attempt($credentials)){
        $request->session()->regenerate();

        return redirect('home')->with('login_success','ログイン成功。');
     }

     return back()->withErrors([
         'login_errors' => 'メールアドレスかパスワードが間違ってます。',
     ]);
    }

    /**
     * @param use App\Models\User
     */

     public function user(){
         $users = User::all();
         return view('main.home', ['users' => $users]);
     }




}
