<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($user)
    {

        return [
            "firstName"   => $this->first_name,
            "lastName"    => $this->last_name,
            "name"        => $this->name,
            "email"       => $this->email,
            "AccountType" => $this->account_type,
            "userId"      => $this->id,
        ];
    }
}
