<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
    'name', 'slug','description', 'quantity', 'price', 'promotional','idcategory', 'idproducttype', 'image', 'status']; 
    
     public function categories(){
    return $this->belongsTo('App\Models\Categories','idcategory','id');
}
    public function productTypes(){
    	return $this->belongsTo('App\Models\ProductTypes','idproducttype','id');
    }

  
}
