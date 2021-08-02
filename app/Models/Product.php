<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'users_id', 'categories_id', 'price', 'description', 'slug'];
}
