<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table='order_product';
    protected $primaryKey='id';
    protected $fillable=['order_id','product_id','product_code','product_name','size','thumbnail','quantum'];
}

