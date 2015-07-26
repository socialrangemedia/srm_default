<?php

use Acme\Forms\LoginForm;

class SessionsController extends \BaseController {
            
        function __construct(LoginForm $loginForm) 
        {   
            $this->loginForm = $loginForm;
        }
        

                
	/**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
            //view 
            return View::make(Config::get('srm.theme_directory'). 'sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
            $this->loginForm->validate($input = Input::only('email', 'password'));
            
            if(Auth::attempt($input))
            {
                return Redirect::intended('/'); //url.intended
            }
            
            return Redirect::back()->withInput()->withFlashMessage('Invalid credentials provided');
	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sessions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}



	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
            Auth::logout();
            
            return Redirect::home();
	}

}