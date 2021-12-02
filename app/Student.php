<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;




class Student extends Model
{
    public function section()
    {
        return $this->belongsTo('App\Section');
    }
    
    
    public function country()
    {
        return $this->belongsTo('App\Country');

    }
    

    public function getAgeAttribute()
    {
    return Carbon::parse($this->attributes['date_of_birth'])->age;
    }
   
}
