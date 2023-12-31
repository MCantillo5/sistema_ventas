<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name', 'lastname', 'email', 'address', 'document', 'phone', 'post'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
