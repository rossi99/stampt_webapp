<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class UserShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Account Type' => $this->accountType,
            'Avatar Src' => $this->avatarSrc,
            'Name' => $this->fullName,
            'Email' => $this->email,
            'Contact Number' => $this->contactNumber,
            'Address Line 1' => $this->addressLineOne,
        ];
    }
}
