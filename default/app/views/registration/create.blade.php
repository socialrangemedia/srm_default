@extends('layout');

@section('content')
    <div class="starter-template">
        <h1>Register!</h1>
        <p class="lead">
        {{ Form::open(array('route' => 'register.store', 'class' => 'form-horizontal')) }}
        
        <!-- field username -->
         <div class="form-group">
             {{ Form::Label('username', 'Username:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) }} 
             {{ $errors->first('username', '<span class="error">:message</span>') }}
            </div>
          </div>
        
        <!-- field email -->
         <div class="form-group">
             {{ Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}    
             {{ $errors->first('email', '<span class="error">:message</span>') }}
            </div>
          </div>
        
        <!-- field passqword -->
         <div class="form-group">
             {{ Form::Label('password', 'Password:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::password('password', null, ['class' => 'form-control', 'required' => 'required']) }}              
             {{ $errors->first('password', '<span class="error">:message</span>') }}
            </div>
          </div>
        
        <!-- field passqword confirm -->
         <div class="form-group">
             {{ Form::Label('password_confirmation', 'Password:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::password('password_confirmation', null, ['class' => 'form-control', 'required' => 'required']) }}              
            </div>
          </div>
        
        
        <!-- create account field -->
         <div class="form-group">
             {{ Form::Submit('Create Account', ['class' => 'btn btn-primary']) }}                        
         </div>
        
        
        
        
        {{ Form::close() }}
        </p>
    </div>
@stop