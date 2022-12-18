<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController
{
    public function login(LoginRequest $request)
    {
      if (Auth::attempt(["email"=>$request->email , "password"=>$request->password]))
      {
        $user = User::where('email', $request->email)->first();
        $success["token"] = $user->createToken('MyApp')->plainTextToken;
        $success["user"]= new UserResource($user);

        return $this->sendResponse($success);

      } else {

        return $this->sendResponse('Unauthorized' , 'fail' , 401);
        
      }

    }
}
