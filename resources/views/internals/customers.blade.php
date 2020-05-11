@extends('layouts.master')

{{--  Page title --}}
@section('title','Customers')


@section('content')
<div class="row m-5 ">
    <div class="col-8">
        <div class="card">
            <div class="card-title m-3"><h1 class="lead">Add new customer</h1></div>
            <div class="card-body">
                <form action="{{url('customers')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name::</label>
                        <input type="text" name="name"  value=" {{old('name')}} "  class="form-control">
                        {{$errors->first('name')}}
                    </div> 
                    
                    <div class="form-group">
                        <label for="name">Email::</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control">
                        {{$errors->first('email')}}
                    </div>

                    <div class="form-group">
                        <label for="active">Status</label>
                        <select name="active" id="Active" class="form-control">
                            <option value="" disabled> Select Customer status</option>
                            <option value="1"> Active</option>
                            <option value="0"> Inactive</option>
                        </select>
                    </div>
                    <button type="submit"  class="btn btn-info mb-5"> Add Customer</button>
                </form>
            </div>
        </div>

    </div>
</div>



<div class="row">
    <div class="col-6">
        
    <h1 class="lead">Active Customers</h1>

    <ul class="list-group">
        @foreach ($activeCustomers as $activeCustomer)
            <li class="list-group-item">{{$activeCustomer->name}} <span class="text-muted"> ( {{$activeCustomer->email}} )</span></li>
        @endforeach
    </ul>

    </div>
    
    <div class="col-6">
        <h1 class="lead">Inactive Customers</h1>
        <ul class="list-group">
        @foreach ($inactiveCustomers as $inactiveCustomer)
            <li class="list-group-item">{{$inactiveCustomer->name}} <span class="text-muted"> ( {{$inactiveCustomer->email}} )</span></li>
        @endforeach
    </ul>

    </div>
</div>





@endsection













