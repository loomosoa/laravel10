<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/auth/login",
 *     summary="Получение токена",
 *     tags={"User"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="email", type="string",
 *     example="user@mail.ru"),
 *                     @OA\Property(property="password", type="string",
 *     example=12345678)
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
            response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *
*                  @OA\Property(property="access_token", type="string",
*                 example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2OTY4NTE5ODUsImV4cCI6MTY5Njg1NTU4NSwibmJmIjoxNjk2ODUxOTg1LCJqdGkiOiJlSWxSR1k1MmpSNExWWnc2Iiwic3ViIjoiMSIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.qlxFr1u8ZQRJLce2rS79fVK0R7_S9SUhlQ3ZdMkFWoY"),
*                  @OA\Property(property="token_type", type="string",
*     example="bearer"),
*                  @OA\Property(property="expires_in", type="integer",
 *     example=3600)
 *
 *          ),
 *     ),
 * ),

 */
class UserController extends Controller
{


}
