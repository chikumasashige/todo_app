<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserController extends Controller
{

     /**
     *ユーザーの詳細 
     * @param int $id
     */
    public function showDetail($id){
        $user = User::find($id);

        if(empty($user)){
            return redirect('home')->with('err_msg','データがありません。');
        }

        \Session::flash('success_msg', 'データがありました。');
        return view('main.detail.detail', ['users' => $user]);
    }

    public function deleteDate($id){
        $user = User::find($id);
        $user->delete();

        return redirect('home')->with('del_msg','データを削除しました。');
    }

}
 