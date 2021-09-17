<?php

namespace App\Model;
use App\Model\Address;
use App\Model\Contact;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
		'customer_id','telephone',
	];
    public function Customer(){
        
        return $this->belongsTo(Customer::class);
    }
}
