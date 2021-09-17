<?php

namespace App\Http\Controllers;
use App\Http\Resources\Customer\CustomerResource;
use App\Model\Customer;
use App\Model\Contact;
use App\Model\Address;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Customer::all();
        return CustomerResource::collection(Customer::paginate(20));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
           $spkAdmin = new Customer();
           foreach ($request->get('formdata') as $key => $value) {
            $spkAdmin->name = $value;
            $spkAdmin->nic = $value;
            $spkAdmin->address=$value;
             }
           $spkAdmin->save();
          
             
          $phone = $request->get('phonenumber');
         foreach ($phone as $key => $value) {
            $telephone = new Contact();
            $telephone->customer_id = $spkAdmin->id;
            $telephone->telephone = $value['phone'];
              $telephone->save();
         }
       return response()->json(['value'=>'sucess'], 200, );
       
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $Customer)
    {
        return new CustomerResource($Customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
       
        
        $result = Customer::
        where('id', $request->get('id'))
       ->update([
        'name' =>$request->get('name'),
        'nic' => $request->get('nic'),
        'address' => $request->get('address'),
           ]);
        $phone = $request->get('phonenumber');
        foreach ($phone as $key => $value) {
            $t = Contact::where('customer_id', $request->get('id'))
            ->update([
                   'customer_id' =>$request->get('id'),
                   'telephone' =>$value['telephone']
            ]);
           
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer,$id)
    {
        return Customer::destroy($id);
    }
}
