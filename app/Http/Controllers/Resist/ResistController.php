<?php

namespace App\Http\Controllers\Resist;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResistFormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class ResistController extends Controller
{
    // ログイン画面遷移
    public function showResist(){
        return view('login.resist');
    }

    /**
     * バリデーション取得
     * @param App\Http\Requests\LoginFormRequest
     * 確認画面遷移
     */
    public function confirm(ResistFormRequest $request){
        $password = $request->input('password');
        $hashed= Hash::make($password);
        $params = [
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' => $hashed,
            'token' =>$request->input('_token')
        ];

        if(isset($params['token'])){
          return view('login.confirm', [
              'params' => $params,
          ]);
        }else{
          return view('login.login_form');
        }
    }

    public function complete(Request $request){
        /**
         * usersテーブルへ登録機能
         * App\Models\User
         */
        User::create([
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'password' =>$request->input('password'),
        ]);

        return view('login.complete');
    }

}
