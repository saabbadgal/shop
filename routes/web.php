<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User Routes
Auth::routes();

//Admin Routes
Route::prefix('admin')->namespace('Admin\Auth')->name('admin.')->group(function(){

        Route::get('login', 'LoginController@showAdminLoginForm')->name('login'); 
        Route::post('login', 'LoginController@adminLogin')->name('login'); 
        Route::post('logout', 'LoginController@logout')->name('logout'); 
        Route::post('register', 'RegisterController@createAdmin')->name('register');
        Route::get('register', 'RegisterController@showAdminRegisterForm')->name('register');
});


Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){

	//Category
	Route::get('category', 'CategoryController@index')->name('category.index');
	Route::post('category', 'CategoryController@store')->name('category.store');
	Route::get('category/{id}', 'CategoryController@edit')->name('category.edit');
	Route::post('category/{id}', 'CategoryController@update')->name('category.update');
	Route::delete('category/{id}', 'CategoryController@destroy')->name('category.destroy');  
    

    //Product
    Route::name('product.')->group(function(){

        Route::get('product', 'ProductController@index')->name('index');
        Route::get('product/create', 'ProductController@create')->name('create');
    	Route::post('product', 'ProductController@store')->name('store');
    	Route::get('product/show/{id}', 'ProductController@show')->name('show');
    	Route::get('product/edit/{id}', 'ProductController@edit')->name('edit');
    	Route::post('product/update/{id}', 'ProductController@update')->name('update');
    	Route::delete('product/delete/{id}', 'ProductController@destroy')->name('destroy');
    
        //Product Image 
    	Route::get('product/images/form/{id}', 'ProductController@uploadForm')->name('images.form');
    	Route::post('product/images/upload/{id}', 'ProductController@uploadImages')->name('images.store');
    	Route::post('product/image/delete/{id}', 'ProductController@deleteImage')->name('image.delete'); 
    });

    //Order

    Route::get('orders','OrderController@index')->name('order.index');
    Route::get('orders/{id}','OrderController@show')->name('order.show');
    Route::patch('order/{id}','OrderController@update')->name('order.update');

	//Slider 
	Route::resource('slider','SliderController');

    //Profile 
    Route::get('profile/edit','ProfileController@edit')->name('profile.edit');
    Route::patch('profile/update/{id}','ProfileController@update')->name('profile.update');

});


Route::namespace('Shop')->group(function(){
    
    //User Profile
    // Route::resource('profile','ProfileController');
    Route::get('profile','ProfileController@index')->name('profile.index');
    Route::get('profile/create','ProfileController@create')->name('profile.create');
    Route::post('profile/save','ProfileController@store')->name('profile.store');
    Route::get('profile/edit/{id}','ProfileController@edit')->name('profile.edit');
    Route::patch('profile/{id}','ProfileController@update')->name('profile.update');
    Route::delete('profile/{id}','ProfileController@destroy')->name('profile.destroy');
    Route::get('profile/orders','ProfileController@orders')->name('profile.orders');

    //Checkout
    Route::get('checkout','CheckoutController@index')->name('checkout.index');
    Route::post('checkout','CheckoutController@store')->name('checkout.store');
    
    //Shop
    Route::get('/','ShopController@index')->name('shop.index');
    Route::get('/shop','ShopController@shop')->name('shop.shop');
    Route::get('/shop/{category}','ShopController@shopBy')->name('shop.category');
    Route::get('product/{id}-{slug}','ShopController@show')->name('shop.show');
    Route::get('about','ShopController@about')->name('shop.about');
    Route::get('gallery','ShopController@gallery')->name('shop.gallery');
    Route::get('konzept','ShopController@konzept')->name('shop.konzept'); 

    //Cart
    Route::post('addtocart/{product}','CartController@addToCart')->name('addToCart');
    Route::get('showcart','CartController@index')->name('cart.index');
    Route::post('removecart/{product}','CartController@removeProduct')->name('cart.remove');
    Route::post('udatecart/{product}','CartController@updateProduct')->name('cart.update');
    Route::get('flash','CartController@flash');
    
    Route::post ('paypal','CheckoutController@paypal')->name('checkout.paypal');
    Route::get('processPaypal','CheckoutController@processPaypal')->name('process.paypal');
    Route::get('cancelPaypal','CheckoutController@cancelPaypal')->name('cancel.paypal');




    Route::get('cart','CartController@index')->name('cart.index');
    Route::post('cart','CartController@store')->name('cart.store');
    Route::delete('cart/delete/{id}','CartController@destroy')->name('cart.destroy');

});



