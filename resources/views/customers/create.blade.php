@extends('layouts.app')

{{--  Page title --}}
@section('title','Add Customer')


@section('content')
<div class="row m-5 ">
    <div class="col-8">
        <div class="card">
            <div class="card-title m-3"><h1 class="lead">Add new customer</h1></div>
            <div class="card-body">
                <form action="{{url('customers')}}" method="POST">
                        @include('customers.form')
                    <button type="submit"  class="btn btn-info mb-5"> Add Customer</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection













