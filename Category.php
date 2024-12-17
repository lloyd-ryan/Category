<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public $incrementing = true;

    protected $keyType = 'int';
    protected $fillable = [
        'category_name',
    ];

    // Disable timestamps if unnecessary (optional)
    // public $timestamps = false;

    /**
     * Relationship to Product
     * Uncomment if you want to use the relationship
     */
    // public function products()
    // {
    //     return $this->hasMany(Product::class, 'category_id');
    // }
}
