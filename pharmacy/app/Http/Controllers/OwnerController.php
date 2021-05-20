<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\medicine;

class OwnerController extends Controller
{
    public function insertmedicine(Request $request){
        $medicine = new medicine;
        $medicine->name = $request->name;
        $medicine->price = $request->price;
        $medicine->save();
        return response()->json($medicine);

    }

    public function insertcutomer(Request $request){
        $customer = new customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();
        return response()->json($customer);
    }
}
