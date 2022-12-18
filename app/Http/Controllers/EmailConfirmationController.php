<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmailConfirmationController extends Controller
{
   public function confirm($token){
      return redirect('/');
   }
}
