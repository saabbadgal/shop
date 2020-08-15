<?php

namespace App\Http\Controllers\Shop;

use Auth;
use Session;
use App\User;
use App\Order;
use App\Address;
use App\OrderStatus;
use PayPal\Api\Item;
use App\OrderAddress;
use App\OrderProduct;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use App\Http\Controllers\Controller;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException; 
 

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

    public function store(Request $request){
          
        // dd($request->all()); 
        $carts = Session::get('cart'); 
        $add = Address::find($request->address_id);

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

        foreach($carts->getContents() as $products){
            
            OrderProduct::create([
           
           'order_id' => $order->id,
           'product_id' => $products['product']->id,
           'size'  => $products['size'],
           'color' => $products['product']->color,
           'qty' => $products['qty'],
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

     public function paypal(){
       if(Session::has('cart')){
         
        $cart = Session::get('cart');
        // dd($cart->getTotalPrice());

            $apiContext = new ApiContext(
                new OAuthTokenCredential(
                env('PAYPAL_CLIENT_ID'),
                env('PAYPAL_SECRET_ID')
                )
            ); 
        
        
        // Create new payer and method
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        // Set redirect URLs
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('process.paypal'))
        ->setCancelUrl(route('cancel.paypal'));

        // Set payment amount
        $amount = new Amount();
        $amount->setCurrency("INR")
        ->setTotal($cart->getTotalPrice());

        // Set transaction object
        $transaction = new Transaction();
        $transaction->setAmount($amount)
        ->setDescription("Payment description");

        // Create the full payment object
        $payment = new Payment();
        $payment->setIntent('sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));
        $payment->create($apiContext);
       return $approvalUrl = $payment->getApprovalLink();
        // Create payment with valid API context
        try {
            $payment->create($apiContext);
        
            // Get PayPal redirect URL and redirect the customer
            $approvalUrl = $payment->getApprovalLink();
        
            // Redirect the customer to $approvalUrl
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }
       }else{
           return "Payment Failed";
       }
           
    }

    public function processPaypal(Request $request){

        // Get payment object by passing paymentId

        $apiContext = new ApiContext(
            new OAuthTokenCredential(
            env('PAYPAL_CLENT_ID'),
            env('PAYPAL_SECRET_ID')
            )
        ); 

        $paymentId = $request->paymentId;
        $payment = Payment::get($paymentId, $apiContext);
        $payerId = $request->payerID;

        // Execute payment with payer ID
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
        // Execute payment
        $result = $payment->execute($execution, $apiContext);
        // dd($result);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
        } catch (Exception $ex) {
        die($ex);
        }
    }
    public function cancelPaypal(){}
} 
