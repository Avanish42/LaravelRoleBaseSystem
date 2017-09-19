<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillController extends Controller
{
    //
    public function add(Request $request)
    {
        //print_r($request);
       try
        {
            echo "add";
        }
        catch (\Exception $exception)
        {
            echo $exception->getMessage();
        }
    }

}
