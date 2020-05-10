@extends('layouts.master')

@section('content')

<h1 class="lead">Add new customer</h1>

<form action="{{url('customers')}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control">
    </div>
    <button type="submit"  class="btn btn-info mb-5"> Add</button>
</form>

<h1 class="lead">Customer list</h1>
<ul>
    @foreach ($customers as $customer)
        <li>{{$customer->name}}</li>
    @endforeach
</ul>
@endsection













