<?php

use Acme\Forms\UserForm;
use Acme\Forms\RegistrationForm;

class UsersController extends \BaseController {
      
        public function __construct(UserForm $userForm, RegistrationForm $registrationForm) {                        
            $this->userForm = $userForm;
            $this->registrationForm = $registrationForm;
        }
    
    
	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
            //set data & columns datatables
            $data['exclude_columns'] = array("", "password", "remember_token", "created_at", "updated_at");            

            $data['json_columns'] = $this->array2Columns(Schema::getColumnListing('users'), $data['exclude_columns']);                     
            $data['json_data'] = $this->result2datatables(User::all()->toArray());                                                                                                                                      
            
            
            return View::make( Config::get('srm.theme_directory'). 'users.index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
            
            return View::make( Config::get('srm.theme_directory'). 'users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
            //
            $input = Input::all();                
            
           
            if(isset($input['id'])){
                $input = Input::only('id','email');  
               
                $this->userForm->validate($input);
                
                
                $user = User::find($input['id']);
                $user->email = $input['email'];
                $user->save();
              
                                                
            }else{
            
                $input = Input::only('username', 'email', 'password', 'password_confirmation');   
                $this->registrationForm->validate($input);            
                $user = User::create($input);            
            }
            
            
            return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            //
            $data['user'] = User::find($id);
                      
 
            return View::make( Config::get('srm.theme_directory'). 'users.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $data['user'] = User::find($id);
            
	    //get user is id is there                        
            return View::make( Config::get('srm.theme_directory'). 'users.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

        
        /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function array2Columns($cols, $exclude_columns)
	{
            //output head
            $output = '[';
            
            //output content
            foreach ($cols as $key => $value) {
                //$check = array_search($value, $exclude_columns);
                //echo "Key: $key; Value: $value<br />\n";
                
                
                
                
                if(array_search($value, $exclude_columns) == FALSE)
                {
                    $output .= '{ "title": "'. $value . '" },';
                }
                //unset($check);
                
            }
    
            //exit;
            //output foot
            $output .= ']';

            //return output
            return $output;
	}
        
        
        
         /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function result2datatables($rows)
	{
                                  
            //output head
            $output = '[';            
            //output content
            foreach ($rows as $row) {                             
                $output .= '[';
                foreach ($row as $key => $value) {                    
                    $output .= "'". $value . "', ";
                }
                $output .= '],';                                                                              
            }            
            //output foot
            $output .= ']';
            
            

            //return output
            return $output;
            
	}
        
}