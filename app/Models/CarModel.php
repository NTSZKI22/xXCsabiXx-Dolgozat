<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $table = "models";
    protected $hidden = [
        'brand_id'
    ];
    protected $fillable = [
        'brand_id',
        'name'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class, 'id', 'car_id');
    }
}
