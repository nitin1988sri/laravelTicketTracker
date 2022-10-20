@extends('layouts.app')

@section('content')
<?php
$dataArray = ['country'=>'Master country','state'=>'Master state','city'=>'Master city']
?>
<div class="container">
    <div class="row justify-content-left">
    @foreach($dataArray as $key=>$dataArray) 
        <div class="col-md-2" style="padding: 10px;">
            <div class="card">
            <a href="<?php echo  url()->current().'/'.($key)?>">
                <div class="card-header">{{ $dataArray}}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            </a>
        </div>
     
       @endforeach 
    </div>
</div>
@endsection
