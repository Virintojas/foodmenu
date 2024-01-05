<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'image',
    ];

    public function Menu() : BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
