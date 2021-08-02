<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "transactions";
    protected $primaryKey = "id";
    protected $fillable = ['users_id', 'inscurance_price', 'shipping_price', 'total_price', 'transaction_status', 'code'];
}
