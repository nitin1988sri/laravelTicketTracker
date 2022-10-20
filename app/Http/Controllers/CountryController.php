<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CountryRepositoryInterface;

class CountryController extends Controller
{
   private $countryRepository;
  public function __construct(CountryRepositoryInterface $country){
    $this->countryRepository=$country;
  }

  public function index(){
    return view('country.index');
   }
  public function list(){
   $countryList = $this->countryRepository->list();
   return view('country.list',['countryList' => $countryList]);

  }

  public function add(Request $request){
    if($request->isMethod('post')){
      $countryList = $this->countryRepository->list();
      return view('country.list',['countryList' => $countryList]);
    }else{
      return view('country.add',['countryList' => '<h1>Saurabh</h1>']);
    }

   }
}
