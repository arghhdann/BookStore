<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'description',
        'shop_id',
    ];

    public function shop()
    {
        return $this->hasOne('App\Models\Shop','id','shop_id');
    }
}
