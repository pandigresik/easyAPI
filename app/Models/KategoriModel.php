<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class KategoriModel extends BaseModel
{
    protected $table = 'kategori';
    protected $returnType = 'App\Entities\Kategori';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'kategori',
		'tipe',
		'urut',
		'enabled',
		'parrent',
		'slug'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[kategori.id,id,{id}]',
		'kategori' => 'max_length[100]|required',
		'tipe' => 'numeric|required',
		'urut' => 'numeric|required',
		'enabled' => 'numeric|required',
		'parrent' => 'numeric|required',
		'slug' => 'max_length[100]'
    ];   
}
