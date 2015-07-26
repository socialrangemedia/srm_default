@extends(Config::get('srm.theme_directory'). 'layouts/layout');

@section('meta-title', 'Login')

@section('content')
    <div class="starter-template">
        <h1>Login!</h1>
        <p class="lead">
        {{ Form::open(array('route' => 'sessions.store', 'class' => 'form-horizontal')) }}
        
        <!-- field email -->
         <div class="form-group">
             {{ Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::text('email', null, ['class' => 'form-control']) }}    
             {{ $errors->first('email', '<span class="error">:message</span>') }}
            </div>
          </div>
        
        
        
        <!-- field passqword -->
         <div class="form-group">
             {{ Form::Label('password', 'Password:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::password('password', null, ['class' => 'form-control']) }}              
             {{ $errors->first('password', '<span class="error">:message</span>') }}
            </div>
          </div>
        
        
        
        <!-- create account field -->
         <div class="form-group">
             {{ Form::Submit('Login', ['class' => 'btn btn-primary']) }}                        
         </div>
        
        @if (Session::has('flash_message'))
        <!-- create account field -->
         <div class="form-group">
             <p> {{ Session::get('flash_message') }} </p>                                    
         </div>
        @endif
        
        
        
        
        
        {{ Form::close() }}
        </p>
    </div>
@stop