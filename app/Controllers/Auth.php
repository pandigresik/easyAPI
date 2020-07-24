<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Config\Services;
use Firebase\JWT\JWT;

class Auth extends ResourceController
{

    protected $format = 'json';

    /**
     * @OA\Post(
     *     path="/auth/login",	 
     *     tags={"Authentication"},
     *     summary="login page to authenticate user",
     *     operationId="userLogin",
     *     @OA\RequestBody(
     *       required=true,
     *       description="Login user",
     *       @OA\MediaType(
     *           mediaType="multipart/form-data",
     *           @OA\Schema(
     * 				type="object",
     * 				@OA\Property(property="username",type="string"),	 
     * 				@OA\Property(property="password",type="string"),
     * 			)
     *       ),
     * 	   ),	 
     *     @OA\Response(
     *         response=200,
     *         description="Login successed",
     *         @OA\JsonContent(
     * 			@OA\Schema(
     * 				type="object",
     * 				@OA\Property(property="token",type="string")	 
     * 			)
     * 		),
     *         @OA\XmlContent(
     * 			@OA\Schema(
     * 				type="object",
     * 				@OA\Property(property="token",type="string")	 
     * 			)
     * 		),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid username/password supplied"
     *     ),	 	 
     * )
     */ 


    public function login()
    {
        /**
         * JWT claim types
         * https://auth0.com/docs/tokens/concepts/jwt-claims#reserved-claims
         */
        
        $email = $this->request->getPost('username');
        $password = $this->request->getPost('password');        
        // add code to fetch through db and check they are valid
        // sending no email and password also works here because both are empty
        if ($email === $password) {
            $key = Services::getSecretKey();
            $payload = [
                'aud' => 'http://localhost:8080',
                'iat' => 1356999524,
                'email' => $email,
                'nbf' => 1357000000,
            ];

            /**
             * IMPORTANT:
             * You must specify supported algorithms for your application. See
             * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
             * for a list of spec-compliant algorithms.
             */
            $jwt = JWT::encode($payload, $key);
            return $this->respond(['token' => $jwt], 200);
        }

        return $this->respond(['message' => 'Invalid login details'], 401);
    }
}