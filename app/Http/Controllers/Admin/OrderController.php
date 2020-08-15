<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
use App\OrderStatus;
use Carbon\Carbon;

class OrderController extends Controller
{   
	   public $spike;

      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        
        $orders = Order::with('statuses','user','address')->get();
    	return view('admin.order.index',compact('orders'));
    }

    public function show($id){
        
        $order = Order::with('statuses','user','address','products')->find($id);
    	return view('admin.order.show',compact('order'));
    }

     public function update(Request $request,$id){
         
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        
        $order_s = OrderStatus::where('order_id',$id)->get();

        foreach($order_s as $os){
           if($os->status == $request->status){
           	$os->status = $request->status;
           	// $os->updated_at = Carbon::now();
           	$os->save();
           	$this->spike = true;
           }else{
           	$this->spike = false;
           }
        }
         
        if($this->spike !== true){
        $order_status = new OrderStatus;
        $order_status->order_id = $id;
        $order_status->status = $request->status;
        $order_status->save();
        $or = Order::find($id);
        $or->status = $request->status;
        $or->save();
           }
        return redirect()->back();
       }
         
       
  }
 
