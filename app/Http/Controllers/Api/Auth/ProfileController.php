<?php

namespace App\Http\Controllers\api\auth;

use App\Http\Controllers\api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends BaseController
{
    public function index(Request $request)
    {
        return new UserResource($request->user());

    }

    public function edit(Request  $request )
    { 
         
        if (empty($request->toArray())) {
            return response()->json([
                'error'=>"request data is empty" ,
                 'code'=> 406
                ] , 406);
        } else {
          $request->user()->update($request->toArray());
          return $this->sendResponse(new UserResource($request->user()));
        }

    }

    public function delete(Request $request)
    {
        $user = $request-> user;
        $user->delete();
        return $this->sendResponse("user deleted");
    }
}
