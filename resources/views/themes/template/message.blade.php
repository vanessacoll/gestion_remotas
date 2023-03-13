@if(Session::has('message'))
   <div class="col-md-12">
    <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> 
        {{ Session::get('message') }}</h4>
    </div>
    </div>

    @elseif(Session::has('messageerror'))
   <div class="col-md-12">
    <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> 
        {{ Session::get('messageerror') }}</h4>
    </div>
    </div>

     @elseif(Session::has('messagealert'))
   <div class="col-md-12">
    <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> 
        {{ Session::get('messagealert') }}</h4>
    </div>
    </div>
@endif
