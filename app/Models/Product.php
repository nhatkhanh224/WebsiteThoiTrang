<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table='product';
    protected $primaryKey='id';
    protected $fillable=['id_category','product_name','image','code','color','description','price'];
    protected $dates = ['deleted_at'];
    public function category()
    {
       return $this->hasOne('App\Models\Category');
    }
}
