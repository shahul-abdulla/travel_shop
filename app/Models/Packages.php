<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Packages extends Model
{
    use HasFactory;
    protected $casts = [
        'tour_includes' => 'array',
        'price_exclude' => 'array',
    ];

    protected $fillable = [
        'package_name',
        'slug',
        'detail_heading',
        'location',
        'price',
        'reviews',
        'date_time',
        'offer',
        'status',
        'image',
        'date',
        'pickup',
        'description',
        'what_expect',
        'tour_includes',
        'location_map',
        'price_exclude',
    ];

    public function activities()
    {
        return $this->hasMany(PackageActivity::class, 'package_id');
    }
    public function days()
    {
        return $this->hasMany(PackageDay::class, 'package_id');
    }
    public function highlightimage()
    {
        return $this->hasMany(HighlightImage::class, 'package_id');
    }
}
