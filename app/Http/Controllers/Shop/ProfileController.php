<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User; 
use App\Address;
use App\Order;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {   
        $user = User::with('addresses')->where('id',auth()->user()->id)->first();
        return view('user.profile.index',compact('user'));
    } 



    public function create(){

        return view('user.profile.create');
    }


    public function store(Request $request)
    {
         $request->validate([
         
        'name' =>'required',
        'address' => 'required',
        'city' => 'required',
        'pin' => 'required',
        'phone' =>  'required',
        ]);

        if($request->phone){
             $user = User::find(auth()->user()->id);
             $user->phone = $request->phone;
             $user->save(); 
         }

        $address = new Address;
        $address->name = $request->name;
        $address->address = $request->address;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->pin = $request->pin;
        $address->country = $request->country; 
         $address->phone = $request->phone; 
        $address->user_id = auth()->user()->id;
        $address->save();

        return redirect()->route('profile.index');
    }

     public function edit($id){

       $address = Address::find($id);
        return view('user.profile.edit',compact('address'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
         
        'name' =>'required',
        'address' => 'required',
        'city' => 'required',
        'pin' => 'required',
        'phone' =>  'required',
        ]);

        if($request->phone){
             $user = User::find(auth()->user()->id);
             $user->phone = $request->phone;
             $user->save(); 
         }

        $address = Address::find($id);
        $address->name = $request->name;
        $address->address = $request->address;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->pin = $request->pin;
        $address->country = $request->country; 
        $address->phone = $request->phone; 
        $address->user_id = auth()->user()->id;
        $address->save();

       return redirect()->route('profile.index');
    }

    public function destroy($id){

        $address = Address::find($id);
        $address->delete();
        return redirect()->route('profile.index');
    }

    public function orders(){
        
      
        $orders = Order::with('statuses','products','address')->where('user_id',auth()->user()->id)->get();
        return view('user.profile.orders',compact('orders'));
    }
}
