<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Http\Requests;

 class CookieController extends Controller {

   public function setCookie($id){

      $minutes = 1;

      $response = new Response();

      $response->withCookie(cookie('id','name', 'slug','status' $minutes, $path, $domain, $secure, $httpOnly));

      return response()->cookie($cookie);

   }
   public function setCookie($id){

      $minutes = 1;

      $response = new Response();

      $response->withCookie(cookie('id','name','email', 'password','re_password' $minutes, $path, $domain, $secure, $httpOnly));

      return response()->cookie($cookie);

   }
     

   public function getCookie(Request $request){ 

     $value = $request->cookie('name');

      echo $value;

   }

}
