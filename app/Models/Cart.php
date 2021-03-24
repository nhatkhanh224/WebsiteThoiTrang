<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='cart';
    protected $primaryKey='id';
    protected $fillable=['id_product','product_name','product_code','color','price','thumbnail','size','quantum','user_email','session_id'];
}
