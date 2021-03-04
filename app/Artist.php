<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['name', 'lastname'];

    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
}
