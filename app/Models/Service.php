<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon',
        'content',
        'image',
        'active',
    ];
    protected $casts = [
        'active' => 'boolean',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            $originalSlug = Str::slug($service->name);
            $slug = $originalSlug;
            $count = 1;

            while (self::where('slug', $slug)->exists()) {
                $slug = "{$originalSlug}-" . $count++;
            }

            $service->slug = $slug;
        });
        static::updating(function ($service) {
            $originalSlug = Str::slug($service->name);
            $slug = $originalSlug;

            $service->slug = $slug;
        });
    }
}
