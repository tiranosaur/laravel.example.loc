<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    public    $timestamps = false;
    protected $table      = 'foo';

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
