@extends('layouts.master')

{{--  Page title --}}
@section('title','Contact')


@section('content')
<div class="row m-5 ">
    <div class="col-8">
        <div class="card">
            <div class="card-header m-3"><h1 class="lead">Get in Touch</h1></div>
            <div class="card-body">
                <form action="{{url('contact')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                    <input type="text" name="name"  value=" {{old('name')}}"  class="form-control">
                        {{$errors->first('name')}}
                    </div> 
                    
                    <div class="form-group">
                        <label for="name">Email:</label>
                        <input type="email" name="email" value=" {{old('email')}} " class="form-control">
                        {{$errors->first('email')}}
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"> {{old('message')}}</textarea>                        
                        {{$errors->first('message')}}
                    </div>

                    <button type="submit"  class="btn btn-info mb-5">Send</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection













