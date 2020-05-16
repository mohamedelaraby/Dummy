@extends('layouts.app')

{{--  Page title --}}
@section('title',$customer->name)


@section('content')
<div class="row m-5 ">
    <div class="col-8">
        <div class="card">
            <div class="card-title m-3 t"><h1 class="lead">{{$customer->name}}</h1> </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">

                        <a href="{{url('customers') . '/' . $customer->id .'/edit'}}" class="btn btn-info">Edit Customer</a>
                    </div>
                    <div class="col-4">
                        <form action="{{url('customers') . '/' . $customer->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"> Remove <i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>                    
                    </div>
                </div> 
                <hr>
               <p class="lead"> <strong>Name:</strong> {{$customer->name}} </p>
               <p class="lead"> <strong>Email:</strong> {{$customer->email}} </p>
               <p class="lead"> <strong>Company:</strong> {{$customer->company->name}} </p>
               <p class="lead"> <strong>Status:</strong> {{$customer->active}} </p>
            </div>
        </div>

    </div>
</div>

@endsection













