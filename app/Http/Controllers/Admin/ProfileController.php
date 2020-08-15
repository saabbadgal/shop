<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {  
        $this->middleware('auth:admin');
        
    }
    
     public function edit(){

         $profile = Profile::first();

         return view('admin.profile.edit',compact('profile'));
    }

    public function update(Request $request, $id){
        
        $request->validate([
         'facebook' => 'required',
         'instagram' => 'required',
         'gmail' => 'required',
         'phone' => 'required',
         'address' => 'required', 
        ]);
        $profile = Profile::find($id);
        // if($request->image){
        //   if(Storage::disk('public')->exists($profile->logo)){

        //            Storage::disk('public')->delete($profile->logo);
        //     }

        //   $imageName = time().'.' . $request->image->extension();
        //   $imageNameFinal = $request->file('image')->storeAs('/', $imageName,'public');
        // }else{
        //   $imageNameFinal = $profile->logo;
        // }
        $profile->facebook = $request->facebook;
        $profile->instagram = $request->instagram; 
        $profile->gmail = $request->gmail;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->logo = "saab";
        $profile->save();
        return redirect()->route('admin.product.index');
    }
}
