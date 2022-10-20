<?php

namespace App\Repositories\ConcreteClass; 

use App\Repositories\CountryRepositoryInterface; 
use  App\Models\Country;
class CountryRepository implements CountryRepositoryInterface 
{     
  public function list(){
      return ['india', 'america','pakistan','egland']; 
  }
    public function add(){
        
    }
  
   public function edit(){

   }

   public function delete(){}

}