<?php 

namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class UserForm extends FormValidator {
   
    protected $rules = [         
        'email' => 'required|email|unique:users',        
    ];
    
}

