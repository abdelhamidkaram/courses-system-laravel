<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'name',
        'account_type',
        'email',
        'password',
        'shipping_address',
        'billing_address',
    ];

    public function fullName()
    {
        return $this->first_name . " ". $this->last_name ;
    }



      
    public function photo()
    {
       return $this-> morphMany(image::class , 'imagine') ;
    }  

     public function billingAddress(){
     
        return $this->hasOne(Address::class , 'id' , 'billing_address' );
    }

    public function shippingAddress(){
     
        return $this->hasOne(Address::class , 'id' , 'shipping_address' );
    }
   
    public function links()
    {
       return $this->hasOne(Link::class , 'id' , 'links');
    }
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




}
