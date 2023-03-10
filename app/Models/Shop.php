<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
    ];

    public function book()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
