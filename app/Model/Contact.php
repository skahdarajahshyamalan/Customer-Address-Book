<?php

namespace App\Model;
use App\Model\Customer;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public function Customer(){
        
        return $this->belongsTo(Customer::class);
    }
}
