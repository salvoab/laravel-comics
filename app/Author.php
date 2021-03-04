<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'lastname'];

    public function comics()
    {
        return $this->hasMany(Comic::class);
    }
}
