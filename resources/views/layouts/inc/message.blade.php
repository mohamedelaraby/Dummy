@if(session()->has('msg'))
<div class="row">
<div class="col-12">
    <alert class="alert alert-success" role='alert'>
        <strong>Success</strong> {{session()->get('msg')}}
    </alert>
</div>
</div>
@endif