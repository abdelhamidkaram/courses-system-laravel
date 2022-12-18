<?php
namespace App\Services\image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageServices{
 public function UploadUserPhoto(Request $request , string  $userType , string  $disk){
        $imageName =$request->file('photo')->getClientOriginalName() ;
        $path = $request->file('photo')->storeAs($userType , $imageName , $disk );
        $request->user()->photo()->create(
          [
            'path'=>$path,
            'type'=>'profile',
          ]
        );
        if($request->user()->photo()->first()->path !=  $path ){
          Storage::disk('images')->delete($request->user()->photo()->first()->path);
          $request->user()->photo()->first()->delete();
        }
    }

}

