@if(Session::has('message'))
   <div class="col-md-12">

    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    </div> 

@elseif(Session::has('messagealert'))
    <div class="col-md-12">

     <div class="alert alert-warning alert-dismissible fade show" role="alert">
         {{ Session::get('messagealert') }}</h4>
         <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>

    </div>     
@endif