<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'title',
        'price',
        'bedrooms',
        'bathrooms',
        'square_meter',
        'year_built',
        'renovated_in',
        'images',
        'video_link',
        'property_type',
        'short_description',
        'long_description',
        'address',
        'status',
        'property_category',
        'country',
        'city',
        'postal_code',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($record) {
            
    //         // Delete associated images when the record is deleted
    //         $imageNames = explode('|', $record->images); // Assuming images are stored as pipe-separated in 'image' column
            
    //         foreach ($imageNames as $imageName) {
    //             $imagePath = ltrim(public_path('property_images/' . $record->id . '/' . $imageName), '/'); // Adjust as per your folder structure
    //             // dd(123, $imageNames , $imagePath);
    //             if (file_exists($imagePath)) {
    //                 // dd(123, $imageNames , $imagePath);
    //                 unlink($imagePath); // Delete the image file
    //             }
    //         }
    //     });
    // }

    // public function propertyType()
    // {
    //     return $this->belongsTo(PropertyType::class, 'property_type');
    // }

}
