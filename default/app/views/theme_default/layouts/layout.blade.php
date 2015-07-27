<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('meta-title',Config::get('srm.project'))</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    
    
    
      <!-- Jquery -->
    {{ HTML::script('packages/jquery/jquery.js') }}
    <!-- Bootstrap -->    
    {{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('packages/bootstrap-datetimepicker/css/bootstrap-datetimepicker.css') }}
    <!-- Custom styles for this template -->      
    {{ HTML::style('css/style.css') }}
           
    
    {{ HTML::script('packages/moment/moment.min.js') }} 
    {{ HTML::script('packages/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}     
    {{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
<!-- Datatables -->    
    {{ HTML::style('packages/datatables/css/jquery.dataTables.css') }}
    
    
    
  </head>
  <body>

        @include(Config::get('srm.theme_directory'). 'layouts/partials/navbar')
      
    <div class="container">
        @yield('content')
    </div>

           
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    {{ HTML::script('packages/bootstrap/js/bootstrap.js') }}
    {{ HTML::script('packages/datatables/js/jquery.dataTables.js') }}
        


  </body>
</html>
