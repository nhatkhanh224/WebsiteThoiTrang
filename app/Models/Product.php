<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $primaryKey='id';
    protected $fillable=['id_category','product_name','thumbnail','code','color','description','price'];
    public function category()
    {
       return $this->hasOne('App\Models\Category');
    }
}
