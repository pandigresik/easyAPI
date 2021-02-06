<?php namespace App\Models;

class ArtikelKategoriModel extends ArtikelModel
{
	// protected $selectColumn = [
	// 	"id","gambar","isi","enabled","tgl_upload","id_kategori","id_user","judul","headline","gambar1",
    //   	"gambar2","gambar3","dokumen","link_dokumen","boleh_komentar","slug","hit","kategori"
	// ];
	protected $selectColumn = 'artikel.id,gambar,isi,artikel.enabled,tgl_upload,id_kategori,id_user,judul,headline,gambar1
		,gambar2,gambar3,dokumen,link_dokumen,boleh_komentar,artikel.slug,hit,kategori';
	public function search($search)
    {        
        $this->join('kategori', 'kategori.id = artikel.id_kategori');
        return parent::search($search);
    }

}
