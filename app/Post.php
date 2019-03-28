<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'category_id', 'slug', 'Alamat'];

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}
