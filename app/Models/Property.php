<?php

namespace App\Models;

use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Sluggable\HasSlug;

class Property extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'description',
        'status',
        'property_type',
        'location',
        'price',
        'video',
        'bed',
        'bath',
        'garage',
        'floor_plans_image',
        'area',
        'slider_image',
        'in_slider',
        'user_id',
        'slug',
        'cover_image'

    ];


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['name'])
            ->saveSlugsTo('slug');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
