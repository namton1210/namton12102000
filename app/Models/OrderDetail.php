<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';
    protected $fillable = ['idoder','idproduct','quantity','price',];
    public function Order(){
    	return $this ->belongsTo('App\Models\Order','idoder','id');
    }
    public function Product(){
    	return $this->belongsTo('App\Models\Product','idproduct','id');
    }
}
