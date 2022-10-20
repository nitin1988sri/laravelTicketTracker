<?php

namespace App\Repositories;
use Illuminate\Http\Request;


interface ProductCategoryInterface
{
    public function list();
    public function listForApi();
    public function add(Request $request);
    public function edit(Request $request);
    public function delete(Request $request);
}
