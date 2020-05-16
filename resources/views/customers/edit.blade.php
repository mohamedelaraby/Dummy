@extends('layouts.app')

{{--  Page title --}}
@section('title',' Edit' . $customer->name)


@section('content')
<div class="row m-5 ">
    <div class="col-8">
        <div class="card">
        <div class="card-title m-3"><h1 class="lead">Edit  <em>{{$customer->name}}</em></h1></div>
            <div class="card-body">
                <form action="{{url('customers/'). '/'.$customer->id}}" method="POST">
                    @method('PATCH')
                    @include('customers.form')
                    <button type="submit"  class="btn btn-info mb-5"> Save</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection













