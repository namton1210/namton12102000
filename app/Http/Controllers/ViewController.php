<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductTypes;
use App\Models\Product;
use App\Models\User;
use Cart;
use Auth;
class ViewController extends Controller
{     
	public function __construct(){
    	$category = Categories::where('status',1)->get();
    	$producttype = ProductTypes::where('status',1)->get();
    	view()->share(['category' => $category,'producttype' => $producttype]);
    }
	public function index(){
	
		$product1 = Product::where('status',1)->where('idcategory',13)->get();
	      $product2 = Product::where('status',1)->where('idcategory',16)->get();
	      $product3 = Product::where('status',1)->where('idcategory',18)->get();
	        $product4 = Product::where('status',1)->where('idcategory',19)->get();
	         $product5 = Product::where('status',1)->where('idcategory',20)->get();

		return view('client.pages.index',['prodt' => $product1, 'proloa' => $product2 ,'promaytinh'=>$product3,'prododung'=>$product4,'prodobep'=>$product5]);
	} 

}
