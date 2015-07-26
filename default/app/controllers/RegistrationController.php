<?php

use Acme\Forms\RegistrationForm;

class RegistrationController extends \BaseController {
    
    
        function __construct(RegistrationForm $registrationForm) 
        {   
            $this->registrationForm = $registrationForm;
        }

	/**
	 * Show the form for creating a new resource.
	 * GET /registration/create
	 *
	 * @return Response
	 */
	public function create()
	{	
                            
            return View::make(Config::get('srm.theme_directory'). 'registration.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /registration
	 *
	 * @return Response
	 */
	public function store()
	{            
            
            $input = Input::only('username', 'email', 'password', 'password_confirmation');
            
            $this->registrationForm->validate($input);
            
            $user = User::create($input);
            
            Auth::login($user);
            
            return Redirect::home();
	}

}