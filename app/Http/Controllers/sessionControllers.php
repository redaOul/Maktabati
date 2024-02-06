<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class sessionControllers extends Controller{
    public function initSeesion($uID, $uName, $uType, $uEmail){
        Session::put('userID', $uID);
        Session::put('userName', $uName);
        Session::put('userType', $uType);
        Session::put('userEmail', $uEmail);
    }

    public function checkSeesion(){
        if( Session::has('userID') ){
            return true;
        }else {
            return false;
        }
    }

    public function destroySeesion(){
        Session::flush();
        return redirect('/');
    }
}
