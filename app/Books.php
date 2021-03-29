<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['title', 'author', 'genre', 'date_published', 'publisher',];

    public function borrows() {
        return $this->hasMany('App\Borrows');
    }
}
