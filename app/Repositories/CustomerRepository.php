<?php
namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface{

    public function all(){
        return Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map->format();
            // ->map(function($customer){

            //     return $customer->format();
            // });
        
    }


    public function findById($id){

        $customer = Customer::where('id', $id)->where('active', 1)->with('user')->firstOrFail();
        return $customer->format();
    }

    public function update($id){
        $customer = Customer::where('id', $id)->firstOrFail();

        $customer->update(request()->only('name'));
    }

    public function delete($id){

        $customer = Customer::where('id', $id)->firstOrFail();

        $customer->delete();
    }

}