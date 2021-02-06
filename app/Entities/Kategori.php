<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Kategori
* @OA\Schema(
*     title="Kategori",
*     description="Kategori"
* )
*
* @OA\Tag(
*     name="Kategori",
*     description="Everything about your Kategori" 
* )
*/ 
class Kategori extends BaseEntity
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
	 *     description="kategori",
	 *     title="kategori",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $kategori;
	/**
	 * @OA\Property(		 		 		 
	 *     description="tipe",
	 *     title="tipe",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $tipe;
	/**
	 * @OA\Property(		 		 		 
	 *     description="urut",
	 *     title="urut",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $urut;
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
	 *     description="parrent",
	 *     title="parrent",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $parrent;
	/**
	 * @OA\Property(		 		 		 
	 *     description="slug",
	 *     title="slug",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $slug; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Kategori",
 *     description="Kategori object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Kategori"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Kategori")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Kategori")
 *     )
 * )
 */