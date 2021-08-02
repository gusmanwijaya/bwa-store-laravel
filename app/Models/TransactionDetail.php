<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = "transaction_details";
    protected $primaryKey = "id";
    protected $fillable = ['transactions_id', 'products_id', 'price', 'shipping_status', 'resi', 'code'];
}
