@extends( Config::get('srm.theme_directory'). 'layouts/layout')

@section('content')
    <div class="starter-template">
        <h1>Users</h1>
        <p class="lead">
            Here a users overview with datatables and onclick to user page
        </p>
        <p class="lead">
           <!-- create account field -->
                 <div class="form-group">
                     <a href="{{ route('users.create') }}" class="btn btn-success">New User</a>                     
                 </div>           
        </p>
         <p id="demo">
           
        </p>
    </div>







<script>
    var dataSet = {{ $json_data }} 
 
    $(document).ready(function() {
        $('#demo').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' ); 
     
        $('#example').dataTable( {
            "data": dataSet,
            "columns":  {{ $json_columns }} 

        } );   
        
        
        //onclick event open record
        var table = $('#example').DataTable();
 
        $('#example tbody').on( 'click', 'tr', function () {
            console.log( table.row( this ).data()[0] );
            window.location =  '<?php echo url(); ?>/users/' + table.row( this ).data()[0];
        } );
        
        
    } );
    
    
</script>

@stop