<?php

namespace App\Http\Controllers\Shop;

use Auth;
use Session;
use App\User;
use App\Order;
use App\Address; 
use Stripe\Charge;
use Stripe\Stripe;
use App\OrderAddress;
use App\OrderStatus; 
use App\OrderProduct; 


use Slim\Http\Response;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
 

class CheckoutController extends Controller
{   

	 public function __construct()
    {
        $this->middleware('is_login');
        $this->middleware('is_cart')->only('store');
    }

    public function index(){
        
        $carts = Session::get('cart');
        $user = User::with('addresses')->where('id',auth()->user()->id)->first();
    	return view('user.checkout.index',compact('user','carts'));
    } 

    public function selectAddress(Request $request){ 

      Session::put('address_id',$request->address_id);

      return view('user.checkout.pay');
    }

    public function pay(Request $request){ 

        \Stripe\Stripe::setApiKey(env("STRIPE_SECRET"));
        
        // header('Content-Type: application/json');
        //  YOUR_DOMAIN = 'http://localhost:4242';
        
        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => 2000,
                    'product_data' => [
                        'name' => 'Stubborn Attachments',
                        'images' => ["https://i.imgur.com/EHyR2nP.png"],
                    ],
                ],
                'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('checkout.store'),
                'cancel_url' => route('checkout.store'),
                ]);
                // echo json_encode(['id' => $checkout_session->id]);
                
                // dd($request->all());
      return $response->withJson([ 'id' => $checkout_session->id ])->withStatus(200);

    }
    

    public function store(Request $request){  

        Session::put('address_id',$request->address_id);
    //    $this->pay($request);
       $cart = Session::get('cart'); 
    //    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //    $stripe = Stripe\Charge::create([ 
    //             "amount" =>  $cart->getTotalPrice() * 100,
    //             "currency" => "inr",
    //             "source" => $request->stripeToken,
    //             "description" => "Test Payment", 
    //     ]);
         
        $carts = Session::get('cart'); 
        $add = Address::find(Session::get('address_id'));

        $address = new OrderAddress;
        $address->name = $add->name;
        $address->address = $add->address;
        $address->city = $add->city;
        $address->state = $add->state;
        $address->pin = $add->pin;
        $address->country = $add->country; 
        $address->phone = $add->phone;
        $address->save();

        $order = new Order;
        $order->order_number = $this->randID(8);
        $order->user_id = auth()->user()->id;
        $order->address_id = $address->id;
        $order->total_price = $carts->getTotalPrice();
        $order->total_qty = $carts->getTotalQty();
        $order->status = "Ordered";
        $order->save();

        $order_status = OrderStatus::create([
           'order_id' => $order->id,
           'status'  => 'Ordered',
        ]);
        // dd($carts->getContents());
        foreach($carts->getContents() as $products){

            OrderProduct::create([

           'order_id' => $order->id,
           'product_id' => $products['product']->id,
           'design_id' => $products['design']->id ?? null, 
           'size'  => $products['size'],
           'color' => $products['product']->color,
           'qty' => $products['qty'],
           'design_price' => $products['design']->designPrice ?? null,
           'price' => $products['price'],
        ]);
        }

        Session::forget('cart');

        return redirect()->route('profile.orders');
    }

   

    public function randID($length) {
	    $vowels = '5789';
	    $consonants = '0123456789';
	    $oNumber = '';
	    $alt = time() % 2;
	    for ($i = 0;$i < $length;$i++) {
	        if ($alt == 1) {
	            $oNumber.= $consonants[(rand() % strlen($consonants)) ];
	            $alt = 0;
	        } else {
	            $oNumber.= $vowels[(rand() % strlen($vowels)) ];
	            $alt = 1;
	        }
	    }
	    
	    return $oNumber;
	 }

      
} 
