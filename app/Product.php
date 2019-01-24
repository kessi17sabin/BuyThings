<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['user_id','category_id','product_name','price','product_brand','product_desc','image','image1','image2'];
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
