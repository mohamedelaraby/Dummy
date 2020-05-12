@extends('layouts.master')

{{--  Page title --}}
@section('title','Add Customer')


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
                            <option value="1"> Online</option>
                            <option value="0"> Offline</option>
                        </select>
                    </div> 
                    
                    <div class="form-group">
                        <label for="company_id">Company</label>
                        <select name="company_id" id="company_id" class="form-control">
                            <option value="" disabled> Select A Company</option>
                            @foreach($companies as $company)
                            <option value=" {{$company->id}} "> {{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit"  class="btn btn-info mb-5"> Add Customer</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection













