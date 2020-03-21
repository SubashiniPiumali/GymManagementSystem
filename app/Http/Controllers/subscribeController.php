<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\subscribe;
use App\supplier;
use DB;

class subscribeController extends Controller
{
    //

    public function store($id){

        $customerId=$id;
        

        if(Auth::check()){

            $supplierId=Auth::user()->id;

            $query=DB::select("select phoneNo from subscribes where supplierId='$supplierId' and customerId='$customerId'");
            if(count($query)>0){
                return redirect()->back()->with('error','You have subscribed before');
           
            }
            else{

                //---------subscibe--
                $supplierPhoneNo = DB::table('suppliers')->select('phoneNo')->where('supplierId', $supplierId)->first();
                $phoneNo=$supplierPhoneNo->phoneNo;


                $subscribeData=new subscribe;

                $subscribeData->phoneNo=$phoneNo;
                $subscribeData->customerId=$customerId;
                $subscribeData->supplierId=$supplierId;

                $subscribeData->save();

                return redirect()->back()->with('success','Subscription Success');
                //----------

            //return $supplierPhoneNo;
            }

            
        }

        else{
            return redirect()->back()->with('error','You have to logged first ( Registered users only can do subscriptions ).');          
        }
        
        

    }




    protected function removeSubscribe($id){
        $subData=subscribe::find($id);
        $subData->delete();
        return redirect()->back();
    }

   
}
