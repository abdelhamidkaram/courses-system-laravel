<?php 
namespace App\Services\users;

use App\Http\Requests\RegisterRequest;
use App\Mail\NewUserRegister;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class UserServices{

    // create and send mail to admin : 
    public function createUser(RegisterRequest $request) : User
    {
        $user =  User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name." ". $request->last_name ,
            'account_type' => $request->account_type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_token'=> bin2hex(openssl_random_pseudo_bytes(30)),
        ]);
        
      Mail::to(User::where(['account_type' => 'admin'])->first())->queue(new NewUserRegister($user));
      
      return $user ;
    }

    // UPDATE USER 

    public function update(Request $request)
    {
        $user = $request->user();
        $request_array = $request->toArray();
        $request_array['name'] = $request_array['first_name'] . " " . $request_array['last_name'] ;
        $user->update($request_array);

    }

    
       

}