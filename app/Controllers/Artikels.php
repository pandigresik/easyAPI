<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Artikels extends BaseResourceController
{
    protected $modelName = 'App\Models\ArtikelKategoriModel';  

     /**
     * @OA\Get(
     *     path="/artikels",
     *     tags={"Artikel"},
     *     summary="Find list Artikel",
     *     description="Returns list of Artikel",
     *     operationId="getArtikel",  
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="search by column defined",     
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Artikel")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Artikel")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Artikel")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Artikel not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/artikels/{id}",
     *     tags={"Artikel"},
     *     summary="Find Artikel by ID",
     *     description="Returns a single Artikel",
     *     operationId="getArtikelById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Artikel to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Artikel"),
     *         @OA\XmlContent(ref="#/components/schemas/Artikel"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Artikel not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/artikels",
     *     tags={"Artikel"},
     *     summary="Add a new Artikel to the store",
     *     operationId="addArtikel",
     *     @OA\Response(
     *         response=201,
     *         description="Created Artikel",
     *         @OA\JsonContent(ref="#/components/schemas/Artikel"),
     *         @OA\XmlContent(ref="#/components/schemas/Artikel"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Artikel"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/artikels/{id}",
     *     tags={"Artikel"},
     *     summary="Update an existing Artikel",
     *     operationId="updateArtikel",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Artikel id to update",
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
     *         description="Artikel not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Artikel"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/artikels/{id}",
     *     tags={"Artikel"},
     *     summary="Deletes a Artikel",
     *     operationId="deleteArtikel",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Artikel id to delete",
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