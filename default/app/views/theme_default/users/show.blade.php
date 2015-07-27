@extends( Config::get('srm.theme_directory'). 'layouts/layout')

@section('content')
    <div class="starter-template">
        <h1>User : {{ $user['username'] }}</h1>
        <p class="lead">
            This is user with id :  {{ $user['id'] }}
        </p>
         <p id="demo">                           
                <!-- field username -->
                <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">Username:</label>                     
                    <div class="col-sm-8">
                     <label for="username" class="col-sm-8 control-label">{{ $user['username'] }}</label>                     
                    </div>
                </div>

                <!-- field username -->
                <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email:</label>                     
                    <div class="col-sm-8">
                     <label for="email" class="col-sm-8 control-label">{{ $user['email'] }}</label>                     
                    </div>
                </div>
               
                <!-- create account field -->
                 <div class="form-group">
                     <a href="{{route('edit', $user['id'])}}" class="btn btn-primary">Edit User</a>                     
                 </div>           
        </p>
    </div>


@stop