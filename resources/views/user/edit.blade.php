@extends('profile')

@section('setting')
 
 	
     <div class="form-horizontal">
                 
{!! Form::model($user,['method' => 'PATCH','route'=>['user.update',$user->id]]) !!}

<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Location</label>
       <div class="col-sm-10">
        {!! Form::text('location',null,['class'=>'form-control']) !!}  
</div>
</div>

<div class="form-group"> 

       <label for="inputEmail" class="col-sm-2 control-label">Education</label>
       <div class="col-sm-10">
        {!! Form::text('education',null,['class'=>'form-control']) !!}  
</div>
</div>

{!! Form::submit('Envoyer !') !!}
{!! Form::close() !!}
</div>
@stop