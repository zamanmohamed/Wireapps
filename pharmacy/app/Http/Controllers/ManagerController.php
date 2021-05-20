<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class ManagerController extends Controller
{
    public function updatecustomer(Request $request){
        $customer = customer::find($request->id);
        $customer->name=$request->name;
        $customer->email=$request->email;
        $result = $customer->save();
        if($result){
            return["customer data has been updated"];
           }else{
            return["Error"];
           }
     }
 
     public function deletecustomer($id){
         $customer = customer::find($id);
         $result=$customer->delete();
         if($result){
            return["customer data has been deleted"];
           }else{
            return["Error"];
           }
      }
}
