<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    // Allow mass assignment with no guarded input fields
    protected $guarded = [];
   
    
    /**
     *  Default attributes
     */
    protected $attributes = [
        'active' => 1,
    ];
    
    /**
     *  accesss active attribute 
     *  @param $attribute | mix
     *  @return column
     */
    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }



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

    /**
     *  Company that customer belongs to
     *  @return relation
     */ 
  
    public function company(){
        return $this->belongsTo(Company::class);
    }

    /**
     *  Handle status options
     *  @return boolean
     */
    public function activeOptions(){
        return [
            1 => 'online',
            0 => 'offline',
            2 => 'In progress',
        ];
    }
}
