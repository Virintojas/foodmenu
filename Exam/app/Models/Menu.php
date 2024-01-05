<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'institute_id',
    ];

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function Products()
    {
        return $this->hasMany(Product::class);
    }
}
