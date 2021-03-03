<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $table='category';
    protected $primaryKey='id';
    protected $fillable=['category_name','description'];
    public function product()
    {
       return $this->hasMany('App\Models\Product');
    }
}
