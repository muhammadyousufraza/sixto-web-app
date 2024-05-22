<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiries';

    protected $fillable = [
        'name',
        'email',
        'number',
        'subject',
        'query',
        'status'
    ];
}
