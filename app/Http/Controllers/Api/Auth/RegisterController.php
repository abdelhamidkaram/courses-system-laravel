<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Mail\NewUserRegister;
use App\Models\User;
use App\Services\UserServices;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends BaseController
{

  public UserServices  $userServices;

     public function  __construct(UserServices $userServices){
      $this->userServices = $userServices;
     }
    
   public function register(RegisterRequest $request )
   {
     if (!empty($request->getErrors()))
      {
        return response()->json($request->getErrors() , 406) ; 
      }

       $user = $this->userServices->createUser($request);
       $message["user"]= new UserResource($user);
       $message["token"]=$user->createToken('myApp')->plainTextToken;

   return $this->sendResponse($message);
          
   }
}
