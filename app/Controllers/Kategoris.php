<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Kategoris extends BaseResourceController
{
    protected $modelName = 'App\Models\KategoriModel';  

     /**
     * @OA\Get(
     *     path="/kategoris",
     *     tags={"Kategori"},
     *     summary="Find list Kategori",
     *     description="Returns list of Kategori",
     *     operationId="getKategori",  
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="search by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="order by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),    
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="page to show",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="count data display per page",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),   
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",     
     *         @OA\JsonContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Kategori")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Kategori")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Kategori")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Kategori not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/kategoris/{id}",
     *     tags={"Kategori"},
     *     summary="Find Kategori by ID",
     *     description="Returns a single Kategori",
     *     operationId="getKategoriById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Kategori to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Kategori"),
     *         @OA\XmlContent(ref="#/components/schemas/Kategori"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Kategori not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/kategoris",
     *     tags={"Kategori"},
     *     summary="Add a new Kategori to the store",
     *     operationId="addKategori",
     *     @OA\Response(
     *         response=201,
     *         description="Created Kategori",
     *         @OA\JsonContent(ref="#/components/schemas/Kategori"),
     *         @OA\XmlContent(ref="#/components/schemas/Kategori"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Kategori"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/kategoris/{id}",
     *     tags={"Kategori"},
     *     summary="Update an existing Kategori",
     *     operationId="updateKategori",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Kategori id to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Kategori not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Kategori"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/kategoris/{id}",
     *     tags={"Kategori"},
     *     summary="Deletes a Kategori",
     *     operationId="deleteKategori",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Kategori id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     * )
     */
} 