<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomerController extends Controller
{
    /**
     *  Display Customers page
     * @return Response
     */
    public function index(){
        // ACtive customers
        $activeCustomers = Customer::active()->get();
        // Inactive customers
        $inactiveCustomers = Customer::InActive()->get();
        // Find all companyies
        $companies = Company::all();
        return view('internals.customers',compact('activeCustomers','inactiveCustomers','companies'));
    } 
    
    /**
     *  Store Customer
     * @return Response
     */
    public function store(){
        $rules = [
            'name' => 'required|min:6',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ];

        // Validate the user
        $data = request()->validate($rules);

        Customer::create($data);
        
        return back();
    }
}
