<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    // Allow mass assignment for the 'name' and 'slug' fields
    protected $fillable = ['name', 'slug'];

    /**
     * Boot method for the model.
     */
    protected static function booted()
    {
        static::creating(function ($category) {
            // Check if slug is empty, and generate it from the name field
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }

            // Ensure the slug is unique
            $originalSlug = $category->slug;
            $i = 1;
            // Check if the slug already exists in the database, and append a number to make it unique
            while (Category::where('slug', $category->slug)->exists()) {
                $category->slug = $originalSlug . '-' . $i++;
            }
        });
    }
}
