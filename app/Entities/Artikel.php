<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Artikel
* @OA\Schema(
*     title="Artikel",
*     description="Artikel"
* )
*
* @OA\Tag(
*     name="Artikel",
*     description="Everything about your Artikel" 
* )
*/ 
class Artikel extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gambar",
	 *     title="gambar",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=200,
	 * )
	 *		 
	 */
	private $gambar;
	/**
	 * @OA\Property(		 		 		 
	 *     description="isi",
	 *     title="isi",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $isi;
	/**
	 * @OA\Property(		 		 		 
	 *     description="enabled",
	 *     title="enabled",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $enabled;
	/**
	 * @OA\Property(		 		 		 
	 *     description="tgl_upload",
	 *     title="tgl_upload",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $tgl_upload;
	/**
	 * @OA\Property(		 		 		 
	 *     description="id_kategori",
	 *     title="id_kategori",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $id_kategori;
	/**
	 * @OA\Property(		 		 		 
	 *     description="id_user",
	 *     title="id_user",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $id_user;
	/**
	 * @OA\Property(		 		 		 
	 *     description="judul",
	 *     title="judul",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $judul;
	/**
	 * @OA\Property(		 		 		 
	 *     description="headline",
	 *     title="headline",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $headline;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gambar1",
	 *     title="gambar1",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=200,
	 * )
	 *		 
	 */
	private $gambar1;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gambar2",
	 *     title="gambar2",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=200,
	 * )
	 *		 
	 */
	private $gambar2;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gambar3",
	 *     title="gambar3",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=200,
	 * )
	 *		 
	 */
	private $gambar3;
	/**
	 * @OA\Property(		 		 		 
	 *     description="dokumen",
	 *     title="dokumen",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=400,
	 * )
	 *		 
	 */
	private $dokumen;
	/**
	 * @OA\Property(		 		 		 
	 *     description="link_dokumen",
	 *     title="link_dokumen",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=200,
	 * )
	 *		 
	 */
	private $link_dokumen;
	/**
	 * @OA\Property(		 		 		 
	 *     description="boleh_komentar",
	 *     title="boleh_komentar",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $boleh_komentar;
	/**
	 * @OA\Property(		 		 		 
	 *     description="slug",
	 *     title="slug",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=200,
	 * )
	 *		 
	 */
	private $slug;
	/**
	 * @OA\Property(		 		 		 
	 *     description="hit",
	 *     title="hit",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $hit; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Artikel",
 *     description="Artikel object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Artikel"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Artikel")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Artikel")
 *     )
 * )
 */