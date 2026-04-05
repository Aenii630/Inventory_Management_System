<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'category',
        'description',
        'purchase_price',
        'selling_price',
        'quantity',
        'low_stock_alert',
        'status'
    ];
}