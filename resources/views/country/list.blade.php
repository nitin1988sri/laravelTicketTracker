@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
    <a href="<?php echo  url()->current().'/add'?>" class="btn btn-primary btn-lg" role="button" aria-disabled="false">Add new country</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($countryList as $key=>$dataArray)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$dataArray}}</td>
                    <td>1</td>
                    <td>
                    <button type="button" class="btn btn-primary">View</button>
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection