<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

   protected $fillable = [
    'street_number',"unit_number","city","state","post_code","suburb"
   ];
}
