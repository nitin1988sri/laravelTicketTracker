@extends('layouts.app')
@section('content')
   <div class="wrapper">
      <!-- Navbar-->
      <x-header :component-name="$header??'header'"/>
      <!-- Sidebar chat start -->
      <x-aside :component-name="$aside??'aside'"/>
     <!-- add sidebar here -->
      </div>
      @include($page, ['data' => $data]);
   </div>
   <x-footer :component-name="$footer??'footer'"/>
@endsection
