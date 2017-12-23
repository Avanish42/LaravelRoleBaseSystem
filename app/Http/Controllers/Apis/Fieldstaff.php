<?php

namespace App\Http\Controllers\Apis;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Fieldstaff extends Model
{
    //


    public function login(Request $request)
    {

//            dd($request);

            print_r($request->uname);
           echo json_encode("helo");



    }







}
