<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    public $fillable=[
        "path","type"
    ];

    public function imagine()
    {
        return $this->morphTo();
    }


    
}
