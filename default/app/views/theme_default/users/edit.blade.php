@extends(Config::get('srm.theme_directory'). 'layouts/layout');

@section('content')
    <div class="starter-template">
        <h1>User</h1>
        <p class="lead">
        {{ Form::open(array('route' => 'users.store', 'class' => 'form-horizontal')) }}
            {{ Form::hidden('id', $user['id'], ['class' => 'form-control', 'required' => 'required']) }} 
        
        <!-- field email -->
         <div class="form-group">
             {{ Form::Label('email', 'Email:', ['class' => 'col-sm-2 control-label']) }}            
            <div class="col-sm-10">
             {{ Form::text('email', $user['email'], ['class' => 'form-control', 'required' => 'required']) }}    
             {{ $errors->first('email', '<span class="error">:message</span>') }}
            </div>
          </div>
        
        <!-- create account field -->
         <div class="form-group">
             {{ Form::Submit('Save User', ['class' => 'btn btn-primary']) }}                        
         </div>
        
        
        
        
        {{ Form::close() }}
        </p>
    </div>
@stop