<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Services\address\AddressServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $address = new AddressServices;
        $address->updateAddress($request);
        return   redirect('/profile');

    }
}
