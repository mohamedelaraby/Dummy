<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    // Allow mass assignment with no guarded input fields
    protected $guarded = [];
   
    /**
     *  Active status 
     *  @param $query | mix
     *  @return Record
     */
    public function scopeActive($query){
        return $query->where('active',1);
    }
    
    /**
     *  InActive status 
     *  @param $query | mix
     *  @return Record
     */
    public function scopeInActive($query){
        return $query->where('active',0);
    }
}
