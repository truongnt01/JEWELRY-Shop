<?php

namespace App\Models;

use App\Traits\HandleUploadImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HandleUploadImageTrait;

    protected $fillable = [
        'name',
        'description',
        'sale',
        'price'
    ];

    public function details(){
        return $this->hasMany(ProductDetail::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function assignCategory($categoryIds){
        $this->categories()->sync($categoryIds);
    }
}
