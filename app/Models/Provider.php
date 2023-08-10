<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name', 'lastname', 'email', 'address', 'document', 'phone'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
