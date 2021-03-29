<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable = ['lname', 'fname', 'phone', 'gender', 'course', 'year',];

    public function borrows(){
        return $this->hasMany('App\Borrows');
    }
}
