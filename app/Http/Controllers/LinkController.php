<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index(Request $request)
    {
        $links = Link::create([
         'twitter'=>$request->twitter,
         'facebook'=>$request->facebook,
         'youtube'=>$request->youtube,
         'linkedin'=>$request->linkedin,
        ]);

        $request->user()->links = $links->id ;
        $request->user()->save() ;

       return redirect('/profile');
    }
}
