<?php

namespace App\Repositories\ConcreteClass;

use Illuminate\Support\Facades\Http;
use App\Repositories\ProductRepositoryInterface;
use  App\Models\Product;
class ProductRepository implements ProductRepositoryInterface
{
    public function create(){
        //This code call an api for fatching product from mongo db
        $ProductList = Http::get(env('API_URL').'list')->json();
        foreach($ProductList as $Product){
         $addProduct = new Product();
         $addProduct->uuid = $Product['_id'];
         $addProduct->p_name = $Product['title'];
         $addProduct->p_details =$Product['details'];
         $exists = Product::where('uuid',$Product['_id'])->first();
         if(!$exists)
         $addProduct->save();
    }
    return $ProductList;
  }
   public function getProductById(){

   }

}
