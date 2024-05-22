<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    use HasFactory;
    protected $table = 'property_types';

    protected $fillable = [
        'type'
    ];

    // public function properties()
    // {
    //     return $this->hasMany(Property::class, 'property_type', 'id');
    // }
}
