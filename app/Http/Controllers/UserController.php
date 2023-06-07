<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function GetEmail(){
        //dd
        //dd
        $Users= User::select('email')->get();//User::select('email')->whereHas('roles', function ($query) {
            //$query->where('name', 'administrator');
        //})->get();//(User::select('email')->get());=$admins =
        $Users_Array=[];
        $String="";
        foreach($Users as $User){
            array_push($Users_Array,$User->email);
            $String.=strval($User->email).",";
        }
        dd($String);
        dd($Users_Array);
    }

    public function getmsisdn($msisdn){
        $User=User::where('email',$msisdn)->first();
        dd($User);
    }
    //
}
