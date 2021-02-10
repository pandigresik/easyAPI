<?php namespace App\Models;

class ArtikelKategoriModel extends ArtikelModel
{	
	protected $selectColumn = 'artikel.id,gambar,isi,artikel.enabled,tgl_upload,id_kategori,id_user,judul,headline,gambar1
		,gambar2,gambar3,dokumen,link_dokumen,boleh_komentar,artikel.slug,hit,kategori';
	public function search($search, $order = [])
    {        
        $this->join('kategori', 'kategori.id = artikel.id_kategori');
        return parent::search($search,$order);
    }
}
