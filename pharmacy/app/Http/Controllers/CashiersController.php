<?php

namespace App\Http\Controllers;
use App\Models\medicine;

use Illuminate\Http\Request;

class CashiersController extends Controller
{
    public function updatemedicine(Request $request){
       $medicine = medicine::find($request->id);
       $medicine->name=$request->name;
       $medicine->price=$request->price;
       $result = $medicine->save();
       if($result){
         return["medicine data has been updated"];
        }else{
         return["Error"];
        }
    }

    public function deletemedicine($id){
        $medicine = medicine::find($id);
        $result = $medicine->delete();
        if($result){
         return["medicine data has been deleted"];
        }else{
         return["Error"];
        }
     }
}
