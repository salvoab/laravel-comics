<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['series', 'cover', 'author', 'artist', 'description', 'volume', 'price', 'trim_size','sale_date', 'page_count', 'rated'];
}
