<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Disable protect mass assignment
    protected $guarded = [];
    /**
     *  Table name
     */
    protected $table = 'companies';

     /**
     *  Company HAS MANY Customers 
     *  @return relation
     */
    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
