<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id',
        'heading',
        'content',
    ];

    public function package()
    {
        return $this->belongsTo(Packages::class, 'package_id');
    }
}
