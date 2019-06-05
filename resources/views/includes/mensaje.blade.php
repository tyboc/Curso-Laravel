@if (session("mensaje"))    
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dism="alert" ></button>
    <h4><i class="icon fa fa-check"></i>Mensaje sistem Biblioteca</h4>
    <ul>
       <li>{{session("mensaje")}}</li>
    </ul>
</div>
@endif 