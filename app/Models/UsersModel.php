<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class UsersModel extends BaseModel
{
    protected $table = 'users';
    protected $returnType = 'App\Entities\Users';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'email',
		'username',
		'password',
		'email_verified_at',
		'remember_token',
		'created_at',
		'updated_at',
		'deleted_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[users.id,id,{id}]',
		'email' => 'max_length[255]|required',
		'username' => 'max_length[30]',
		'password' => 'max_length[255]|required',
		'email_verified_at' => 'valid_date',
		'remember_token' => 'max_length[255]',
		'created_at' => 'valid_date',
		'updated_at' => 'valid_date',
		'deleted_at' => 'valid_date'
    ];   
}
