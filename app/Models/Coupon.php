<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table='coupon';
    protected $primaryKey='id';
    protected $dates = ['start_date','expiry_date'];
    protected $fillable=['coupon_name','money','type','start_date','expiry_date'];
}
