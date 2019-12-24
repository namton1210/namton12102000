<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
   protected $table = 'orders';
   protected $fillable = ['code_order','iduser','name','address','email','phone','money','massage','status',];

}
