<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    protected $fillable = ['student_id', 'book_id', 'date_borrowed', 'date_returned',];
    
    public function student() {
        return $this->belongsTo('App\Students');
    }
    public function book() {
        return $this->belongsTo('App\Books');
    }
}
