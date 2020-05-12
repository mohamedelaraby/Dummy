@extends('layouts.master')

{{--  Page title --}}
@section('title',$customer->name)


@section('content')
<div class="row m-5 ">
    <div class="col-8">
        <div class="card">
            <div class="card-title m-3"><h1 class="lead">{{$customer->name}}</h1></div>
            <div class="card-body">
               <p class="lead"> <strong>Name:</strong> {{$customer->name}} </p>
               <p class="lead"> <strong>Email:</strong> {{$customer->email}} </p>
               <p class="lead"> <strong>Company:</strong> {{$customer->company->name}} </p>
            </div>
        </div>

    </div>
</div>

@endsection













