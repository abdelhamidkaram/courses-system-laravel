<?php
namespace App\Services\address;

use App\Models\Address;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class AddressServices{

   public function updateAddress(Request $request ){
    try {
        $user = $request->user();
        $address = new Address();

        if ($request->street_number) {
            $address->street_number = $request->street_number ; 
        }
        if ($request->unit_number) {
            $address->unit_number = $request->unit_number ; 
        }
        if ($request->city) {
            $address->city = $request->city ; 
        }
        if ($request->state) {
            $address->state = $request->state ; 
        }
        if ($request->post_code) {
            $address->post_code = $request->post_code ; 
        }
        if ($request->country) {
            $address->country = $request->country ; 
        }

        $address->save();
        session()->push("addressUpdatedSuccess" , true);
        $user->billing_address = $address->id ; 
        $user->shipping_address = $address->id ; 

        $user->save();
        debugbar()->error("update address successes ");
    } catch (\Throwable $th) {
        Log::info($th->getMessage());
    }
    
   }

}
