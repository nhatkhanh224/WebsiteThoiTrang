<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $table='image_product';
    protected $primaryKey='id';
    protected $fillable=['id_product','image'];
    
}
