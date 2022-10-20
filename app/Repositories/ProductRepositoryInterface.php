<?php

 namespace App\Repositories;

/**
* Interface EloquentRepositoryInterface
* @package App\Repositories
*/
interface ProductRepositoryInterface
{
   public function create();
   public function getProductById();
}
