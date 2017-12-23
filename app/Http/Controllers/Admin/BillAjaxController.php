<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\model\Bill;
use App\User;
use Illuminate\Support\Facades\DB;
use View;

class BillAjaxController extends Controller
{
    //
    public function allocateBillsByAjax(Request $request)
    {

        $temp_data = $request->all();

//                echo $request->billTo;
//                echo $temp_data['allocationno'];
//            die();
        unset($temp_data['_token']);

        if ($request->billTo != null)
        {

            $billTo = $request->billTo;
            unset($temp_data['billTo']);
            unset($temp_data['billno']);
        }

        if ($request->billFrom != null)
        {
            $billfrom = $request->billFrom;
            unset($temp_data['billFrom']);
        }
        if ($request->billno != null) {
            $billTo = $request->billno;
            unset($temp_data['billno']);
            unset($temp_data['billFrom']);
            unset($temp_data['billTo']);
        }

        if ($request->allocationno != null) {
            $allocationno = $request->allocationno;
            unset($temp_data['allocationno']);
            unset($temp_data['billno']);
            unset($temp_data['billFrom']);
            unset($temp_data['billTo']);
        }
//
//        if($request->billTo)
//        {
//            return Response::json(array("code" => 400, "message" => "Bill Found"));
//
//        }
//        echo "<pre>";
//        print_r($temp_data);
//        die();

        if($request->billno xor ($request->billFrom  && $request->billTo ))//all select
        {
//            return Response::json(array("code" => 100, "message" => "can upload bills"));
            if (count($temp_data) == 0) {
                return Response::json(array("code" => 400, "message" => " please seect employee"));
            }

            if($request->billFrom  && $request->billTo)
            {
                $billupdate=Bill::whereBetween('billNo', [$request->billTo,$request->billFrom])->get();
//                    dd($billupdate->toArray());
//                    $users = User::where('billNo', '>=', '$request->billTo')->get();
                foreach ($billupdate as $bills) {
                    $bills->allocationNo = $request->allocationno;
                    $bills->save();

                    foreach ($temp_data as $emp => $valemp) {

                        $savearray = [
                            'user_id' => $valemp,
                            'bill_id' => $bills->id,
                            'created_at' => Carbon::now()
                        ];

//                                                    echo "<pre>";
//                                                    print_r($savearray);
                        $insert = DB::table('user_bill')->insert($savearray);
                    }

                }


            }
            if($request->billno)
            {
                $billupdate=Bill::where('billNo', $request->billno)->get();

                $billupdate->allocationNo = $request->allocationno;
                $billupdate->save();
                foreach ($temp_data as $emp => $valemp) {

                    $savearray = [
                        'user_id' => $valemp,
                        'bill_id' => $bills->id,
                        'created_at' => Carbon::now()
                    ];
                    $insert = DB::table('user_bill')->insert($savearray);
                }

            }

//            return Response::json(array("code" => 100, "message" =>" all done" ,'allocatedData'=>$allocatedData));
            $currentSupply=Bill::where('allocationNo',$request->allocationno)->where('isPast',0)->get();
            return Response::json(View::make('Users.Manager.partialcurrentallocation', array('currentSupply' => $currentSupply))->render());




        }
        else
        {
            return Response::json(array("code" => 400, "message" => " Blank Please select either single bill or set of bill"));

        }

//        return $request->json();

    }


    public function removeCurrentAllocationByAjax(Request $request)
    {
        $temp_data=$request->all();
        // echo $temp_data['id'];
        // array('status' => 2)
        $status=Bill::where('id',$request->id)->update(array('allocationNo'=>''));
        DB::table('user_bill')->where('bill_id','=',$request->id )->delete();


        $currentSupply=Bill::where('allocationNo',$request->allocationno)->get();
        return Response::json(View::make('Users.Manager.partialcurrentallocation',array('currentSupply' => $currentSupply))->render());

        //echo "status".$status;

        //die();


    }
public function removePastAllocationByAjax(Request $request)
    {
        $temp_data=$request->all();

   //     dd($temp_data);
        // echo $temp_data['id'];
//        array('status' => 2)
        $status=Bill::where('id',$request->id)->delete();
        DB::table('user_bill')->where('bill_id','=',$request->id )->delete();


    $pastSupply=Bill::where('allocationNo',$request->allocation)->where('isPast',1) ->get();
    return Response::json(View::make('Users.Manager.partialPastAllocation',array('pastSupply' => $pastSupply))->render());

        //echo "status".$status;

        //die();


    }

    public function addPastAllocationByAjax(Request $request)
    {
        //             return
        //             dd($request->all());
        $temp_data = $request->all();

        if(!$request->pastBill)
        {
            return Response::json(array("code" => 400, "message" => " please select the bill"));

        }

        $checkbill= Bill::where('billNo',$request->pastBill)->where('allocationNo',$request->allocationno)->first();

        if($checkbill)
        {
            return Response::json(array("code" => 400, "message" => " Bill Already added in past bill "));

        }





        if ($request->allocationno != null) {
            $allocationno = $request->allocationno;
            unset($temp_data['allocationno']);
            unset($temp_data['pastBill']);
            //unset($temp_data['billFrom']);
            //unset($temp_data['billTo']);
            unset($temp_data['_token']);
        }

         $bill=Bill::where('billNo',$request->pastBill)->orderBy('updated_at','desc')->first();
         //   dd($bill);
       // $bill->id="";
        $newBill= $bill->toArray();
        unset($newBill['id']);
        $newBill['updated_at']=Carbon::now();
        $newBill['allocationNo']=$request->allocationno;
        $newBill['isPast']=1;
//             $newBill= $bill;
//             unset($newBill->id);
             $billid=Bill::insertGetId($newBill);
        foreach ($temp_data as $emp => $valemp) {
            $savearray = [
                'user_id' => $valemp,
                'bill_id' => $billid,
                'updated_at' => Carbon::now()
            ];
            $insert = DB::table('user_bill')->insert($savearray);
        }



//        $newBill=new Bill();
//        $newBill=$bill;

//        unset($newBill->id);

//        $newBill->save();



        $test=Bill::where('billNo',$request->pastBill)->get();
//       echo "<pre>";
//        print_r($test->toArray());
//        die();
        //        dd($test);

//        return Response::json(array("code" => 100, "message" => "done"));


        $pastSupply=Bill::where('allocationNo',$request->allocationno)->where('isPast',1)->get();

//        console.log($pastSupply);
//        dd($pastSupply);
        return Response::json(View::make('Users.Manager.partialPastAllocation', array('pastSupply' => $pastSupply))->render());




    }
}
