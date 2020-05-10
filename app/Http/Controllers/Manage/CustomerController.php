<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    /**
     *  Display Customers page
     * @return Response
     */
    public function index(){
        $customers = Customer::all();
        return view('internals.customers',compact('customers'));
    } 
    
    /**
     *  Store Customer
     * @return Response
     */
    public function store(){
        $customer = new Customer();
        $customer->name = request('name');
        $customer->save();
        return back();
    }
}
