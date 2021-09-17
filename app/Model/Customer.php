<?php

namespace App\Model;
 use App\Model\Address;
 use App\Model\Contact;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
		'name','nic',
	];

  public function Contact(){
    return $this->hasMany(Contact::class,'customer_id')->select('telephone')->orderBy('created_at', 'ASC');; 
  }
  public function Adres(){
    return $this->hasMany(Address::class,'customer_id')->select('adressname')->orderBy('created_at', 'ASC');; 
  }
  
}
