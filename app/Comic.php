<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['series', 'cover', 'author_id', 'description', 'volume', 'price', 'trim_size','sale_date', 'page_count', 'rated', 'available'];

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
