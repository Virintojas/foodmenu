<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Institute extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'phone',
        'email',
    ];

    public function Menu() : HasOne
    {
        return $this->hasOne(Menu::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
