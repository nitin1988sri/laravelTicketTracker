<?php

namespace App\Http\Controllers;
use App\Repositories\ProductRepositoryInterface;

class ProductController extends Controller
{
  private $productRepository;

   public function __construct(ProductRepositoryInterface $productRepository)
   {
       $this->productRepository = $productRepository;
   }

   public function productList(){
     $ProductList = $this->productRepository->create();
     return view('product',['productList' => $ProductList]);
   }

   public function productDetails($id){
   echo  $id;
   }

  }

