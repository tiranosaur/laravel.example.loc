<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    public $timestamps = false;

    public function foo(){
        return $this->hasMany(Foo::class);
    }
}
