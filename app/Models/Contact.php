<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['iduser','message',];
     public function User(){
   	return $this belongsTo('App\Models\User','iduser','id');
   }
}
