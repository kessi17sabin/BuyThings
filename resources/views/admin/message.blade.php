@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@elseif(session('error-message'))
    <div class="alert alert-danger">
        {{session('error-message')}}
    </div>
@endif
