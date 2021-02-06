<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class ArtikelModel extends BaseModel
{
    protected $table = 'artikel';
    protected $returnType = 'App\Entities\Artikel';
    protected $primaryKey = 'id';    
    protected $allowedFields = [
        'gambar',
		'isi',
		'enabled',
		'tgl_upload',
		'id_kategori',
		'id_user',
		'judul',
		'headline',
		'gambar1',
		'gambar2',
		'gambar3',
		'dokumen',
		'link_dokumen',
		'boleh_komentar',
		'slug',
		'hit'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[artikel.id,id,{id}]',
		'gambar' => 'max_length[200]',
		'isi' => 'required',
		'enabled' => 'numeric|required',
		'tgl_upload' => 'required',
		'id_kategori' => 'numeric|required',
		'id_user' => 'numeric|required',
		'judul' => 'max_length[100]|required',
		'headline' => 'numeric|required',
		'gambar1' => 'max_length[200]',
		'gambar2' => 'max_length[200]',
		'gambar3' => 'max_length[200]',
		'dokumen' => 'max_length[400]',
		'link_dokumen' => 'max_length[200]',
		'boleh_komentar' => 'numeric|max_length[1]|required',
		'slug' => 'max_length[200]',
		'hit' => 'numeric'
    ];   
}
