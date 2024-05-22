<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTypes extends Model
{
    use HasFactory;
    
    protected $table = 'property_types';

    protected $fillable = [
        'type'
    ];
}
