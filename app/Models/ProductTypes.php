<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model
{
    protected $table = 'producttype';
    protected $fillable = ['idcategory','name','slug','product',];
     public function Category(){
   	return $this->belongsTo('App\Models\Categories','idcategory','id');
   }


  
}

