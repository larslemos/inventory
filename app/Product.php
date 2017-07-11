<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    // public $category = Category::with('products')->get();

    protected $fillable = array('name', 'description', 'price', 'quantity', 'size', 'category_id');

    public function category() {
      return $this->belongsTo(Category::class);
    }
}
