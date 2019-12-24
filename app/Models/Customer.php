<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   protected $table = 'customers';
   protected $fillable =['iduser','address','email','phone',];
   public function User(){
   	return $this belongsTo('App\Models\User','iduser','id');
   }
}
