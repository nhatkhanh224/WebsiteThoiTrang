<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='order';
    protected $primaryKey='id';
    protected $fillable=['user_email','name','address','phone','ship','coupon','coupon_money','total','status','option'];
}

