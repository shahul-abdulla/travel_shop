<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighlightImage extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'image_path'];
    public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
}