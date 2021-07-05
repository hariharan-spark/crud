<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Redirect;


class CustomersController extends Controller
{
    public function index(){
        $customers = customer::all();
      
        return view('welcome',compact('customers'));
    }


    public function create(request $request){
    $customer = new customer;
    $customer->first_name=$request->first_name;
    $customer->last_name=$request->last_name;
    $customer->email=$request->email;
    $customer->phone_number=$request->phone_number;
    $customer->state=$request->state;
    $customer->country=$request->country;



   
 
    if( $customer->save()){
        echo "insert";
    }else{
        echo "not";
    }
    return back(); 
    }
  
}
