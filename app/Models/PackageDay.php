<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageDay extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'day', 'title', 'day_activity'];

    public function package()
    {
        return $this->belongsto(Packages::class, 'package_id');
    }
}
