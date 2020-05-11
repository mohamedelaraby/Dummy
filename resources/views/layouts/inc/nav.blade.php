<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">

    
    <a class="navbar-brand" href="#">Venture</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('about')}}">About</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('customers')}}">Customers List</a>
            </li>
         <li class="nav-item">
            <a class="nav-link" href="{{url('customers')}}"> {{$username}} </a>
            </li>
         
        </ul>
    </div>
</div>
</nav>