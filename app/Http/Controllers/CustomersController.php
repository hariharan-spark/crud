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


    public function insert(Request $request){
        $request->validate([
           
            'first_name'=>'required |min:3|max:20',
            'last_name'=>'required |min:3|max:20',
            'email'=>'required|email',
            'phone_number'=>'required',
            'state'=>'required',
            'country'=>'required'
        ]);


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

    


    public function show($id){

        $customers = customer::find($id);
        return view('welcome',compact('customers'));
    }

    public function update(Request $request){


        $request->validate([
           
            'first_name1'=>'required |min:3|max:20',
            'last_name1'=>'required |min:3|max:20',
            'email1'=>'required|email',
            'phone_number1'=>'required',
            'state1'=>'required',
            'country1'=>'required'
        ]);

    
        $customer = customer::find($request->id);
        $customer->first_name=$request->first_name1;
        $customer->last_name=$request->last_name1;
        $customer->email=$request->email1;
        $customer->phone_number=$request->phone_number1;
        $customer->state=$request->state1;
        $customer->country=$request->country1;

         $customer->save();
         return back();

    }    

        public function delete($id){

            $customers = customer::find($id);
            
         $customers->delete();
      
        return back();


        }

    

    
  
}
