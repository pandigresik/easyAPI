<?php namespace App\Controllers;

use App\Controllers\BaseController;

class Swagger extends BaseController
{
    public function index(){        
        return view('swagger/index');
    }
    
}