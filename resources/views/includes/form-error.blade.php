@if ($errors->any())    
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dism="alert" ></button>
    <h4><i class="icon fa fa-ban"></i>El formulario contiene errores</h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif