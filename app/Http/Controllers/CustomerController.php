<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Repositories\CustomerRepositoryInterface;

class CustomerController extends Controller
{

    public function __construct(CustomerRepositoryInterface $customerRepository){

        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->all();

        return $customers;
    }


    public function show($customerId){

        $customer = $this->customerRepository->findById($customerId);

        return $customer;
    }

    public function update($customerId){

        $customer = $this->customerRepository->update($customerId);

        return redirect('/customers/' . $customerId);
    }

    public function destroy($customerId){

        $customer = $this->customerRepository->delete($customerId);

        return redirect('/customers');
    }
}
