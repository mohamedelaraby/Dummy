@extends('layouts.app')

{{--  Page title --}}
@section('title','Customers')


@section('content')
<div class="row mt-5">
    <div class="col-6">
        <h3> Customers List</h3>
        
    </div>
     <div class="col-6">
        <a href="{{url('customers/create')}}" class="btn btn-info"> Add new Customer</a>
    </div>
</div>
<hr>



@foreach ($customers as $customer)
    
<div class="row">

        <div class="col-2"> {{$customer->id}} </div>
        <div class="col-4">
        <a href="{{url('customers'). '/'.$customer->id}}" class="btn-link"> {{$customer->name}}</a>    
        </div>
        <div class="col-4"> {{$customer->company->name}} </div>
        <div class="col-2"> {{$customer->active}} </div>
</div>
@endforeach




@endsection













