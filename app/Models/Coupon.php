<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table='coupon';
    protected $primaryKey='id';
    protected $fillable=['coupon_name','money','type','expiry_date'];
}
