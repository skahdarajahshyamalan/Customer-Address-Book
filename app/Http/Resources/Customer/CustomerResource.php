<?php

namespace App\Http\Resources\Customer;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
             'name' => $this->name,
             'nic' => $this->nic,
             'id' =>$this->id,
             'phonenumber' =>$this->Contact,
             'address'  => $this->address
        ];
    }
}
