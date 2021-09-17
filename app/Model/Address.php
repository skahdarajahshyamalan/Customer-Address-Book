<?php

namespace App\Model;
use App\Model\Customer;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    protected $fillable = [
		'customer_id','adressname',
	];
    public function Customer(){
        
        return $this->belongsTo(Customer::class);
    }
}
