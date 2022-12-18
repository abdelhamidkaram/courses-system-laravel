<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendResponse($response , $status ="success" , $code = "200" )
    {
       return response()->json(['data'=>$response , "status"=> $status] , $code);
    }
}
