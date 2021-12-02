<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function student()
    {
        return $this->hasMany('App\Student', 'id');
    }
}
