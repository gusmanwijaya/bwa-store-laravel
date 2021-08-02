<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;

    protected $table = "product_galleries";
    protected $primaryKey = "id";
    protected $fillable = ['photos', 'products_id'];
}
