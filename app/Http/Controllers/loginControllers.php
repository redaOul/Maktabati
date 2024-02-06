<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\sessionControllers;
use Illuminate\Http\Request;

class loginControllers extends Controller{
    public function auth(){
        $myData = json_decode($_POST["logInData"]);
        $user = DB::table('users')
                 ->where('email', '=', $myData->userEmail)
                 ->where('mdp', '=', $myData->userMDP)
                 ->first();
        if(!$user){ 
            return null;
        }else{
            (new sessionControllers)->initSeesion($user->id, $user->nom, $user->usertype, $user->email);
            return $user->usertype;
        }
    }
}
