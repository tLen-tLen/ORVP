<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
   public function index()
   {
       $products = Product::getAllProduct();

       return view('products', compact('products'));
   }

   
   public function destroy($id)
   {
       Product::destroy();
       $products = Product::getAllProduct();
       return view('products', compact('products'));
   }
   
   public function add()
   {
       return view('add');
   }
   
   public function create(Request $request)
   {
       $input = $request->all();
       Product::create($input["Name"], $input["Description"], $input["Price"], $input["Photo"]);
       $products = Product::getAllProduct();
       return view('products', compact('products'));
   }
   
   public function showSession(Request $request)
   {
       
       if ($request->session()->exists('count')) {
          $value = $request->session()->get('count');
          $request->session()->put('count', $value+1);
       } else {
          $value = 1;
          $request->session()->put('count', 1);
       }
       
       return view('showSession', compact('value'));
   }

}
