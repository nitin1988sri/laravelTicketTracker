<?php

namespace App\Repositories\ConcreteClass;

use App\Repositories\ProductCategoryInterface;
use  App\Models\Category;
class ProductCategoryRepository implements ProductCategoryInterface
{
    public function list(){
       return Category::paginate(10);
    }

    public function listForApi(){
        return Category::select('id','category_name')->where('status',1)->limit(10)->get();
    }
    public function add($request){

         $addCategory = new Category();
         $addCategory->category_name = $request->category_name;
         $addCategory->description = $request->description;
         $addCategory->status = $request->status;
         $addCategory->save();
    }

   public function edit($request){

   }

   public function delete($request){

   }

}
