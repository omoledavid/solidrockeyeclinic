<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'first_image',
        'second_image',
        'status'
    ];
    protected $casts = [
        'status' => 'boolean'
    ];
}
