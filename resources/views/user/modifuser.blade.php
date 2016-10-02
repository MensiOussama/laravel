@extends('profile')

@section('settings')
 
 	
     <div class="form-horizontal">
                 
{!! Form::model($user,['method' => 'PATCH','route'=>['user.update',$user->id]]) !!}

<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Name</label>
       <div class="col-sm-10">
        {!! Form::text('name',null,['class'=>'form-control']) !!}  
</div>
</div>

<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Surname</label>
       <div class="col-sm-10">
        {!! Form::text('surname',null,['class'=>'form-control']) !!}  
</div>
</div>

<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Email</label>
       <div class="col-sm-10">
        {!! Form::text('email',null,['class'=>'form-control']) !!}  
</div>
</div>
<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Password</label>
       <div class="col-sm-10">
        {!! Form::password('',null,['class'=>'form-control']) !!}  
</div>
</div>
<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Confirmer Password</label>
       <div class="col-sm-10">
        {!! Form::password('',null,['class'=>'form-control']) !!}  
</div>
</div>
{!! Form::submit('Envoyer !') !!}
{!! Form::close() !!}
</div>
@stop