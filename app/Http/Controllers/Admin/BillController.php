<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;
use Maatwebsite\Excel\Facades\Excel;
use App\model\Bill;

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

    public function uploadBill()
    {
        return view('Users.Manager.allocation');
    }
    public function storeBill(Request $request)
    {

        //     dd($request->toArray());

                $bill=new Bill();
               // $bill->allocationNo= (config('app.company_name')."-".date("dmY")."-"."1");
               // dd($bill->toArray());


        if ($request->hasFile('upload')) {
            $path = $request->file('upload')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
//                  dd($data->toArray());
                    $i = 0;
                foreach ($data->toArray() as $key => $value) {
                    if (!empty($value)) {
//                        dd($value);


//                        echo "<br>";
                        echo "<pre>";

                        foreach ($value as $k=>$v)
                        {
                            print_r($v);

                            $bill->salesMan= $v['salesman'];
                            $bill->salesMan= $v['salesman'];
                            $bill->salesMan= $v['salesman'];
                            $bill->salesMan= $v['salesman'];
                            $bill->salesMan= $v['salesman'];

                           // print_r($bill->toArray());
                            echo "<br>";

                        }

//                        echo json_encode($value)s;
//                        echo "<br>";
//                        echo "<br>";
//                        echo "<br>";
//                        echo "<br>";
                    }
                }
            }
        }

        else
        {
            dd('file not found');
        }
    }

}
