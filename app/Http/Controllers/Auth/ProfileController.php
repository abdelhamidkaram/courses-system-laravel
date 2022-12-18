<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Services\image\ImageServices;
use App\Services\users\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator ;

class ProfileController extends Controller
{
   public function __construct()
   {
    $this->middleware([
        'auth' , 'verified',
    ]);
   }

   
   public function index()
   {
    $address = Address::find(Auth::user()->billing_address);
    $links = Address::find(Auth::user()->links);
    return view('auth.profile.profile', ['user'=>Auth::user(),'address'=>$address , 'links'=>$links]); 
   }



    public function update(Request $request)
    {
        
      try {
        $userServices =  new UserServices;
        $userServices->update($request);
        session(['updateUserSuccess' => true]);
        return redirect('/profile');
      } catch (\Throwable $th) {
        return redirect('/');
      }


    }

   
   public function addProfilePhoto(Request $request)
   {
     if(!empty($request->file('photo'))){
      $postData = $request->only('photo');
      $file = $postData['photo'];
      $fileArray = array('image' => $file);
      $validate = Validator::make($fileArray,
       [      'image' => 'mimes:jpeg,jpg,png,gif|max:10000'
      ]);
       if($validate->fails()){
        session()->push("thisIsNotImage" , true);
       return redirect('/profile');
      }else{
        $imageServices = new ImageServices;
        $imageServices->UploadUserPhoto($request , $request->user()->account_type , 'images' );
       }
     } 
    return  redirect('/profile');
 
    }






}
