<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Создание поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="", type="array", @OA\Items(

*                          @OA\Property(property="title", type="string"),
 *                         @OA\Property(property="likes", type="integer")
 *
*                      )),
 *                 )
 *             },
 *             example={
 *                  {
                        "title"="Some title",
 *                      "likes"=20
 *                  },
 *                  {
                        "title"="Some another title",
 *                      "likes"=240
 *                  },
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
            response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="first_item", type="object",
 *                      @OA\Property(property=2020, type="array", @OA\Items(

 *                      )),
                        @OA\Property(property=2021, type="array", @OA\Items(

 *                      )),
 *                  ),
 *                  @OA\Property(property="second_item", type="object"),
 *              ),
 *
 *              example={
                    "data": {
 *                      "first_item": {
                            2020: {},
 *                          2021: {}
 *                      },
 *                      "second_item": {}
 *                  }
 *              }
 *          ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="Список постов",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                      @OA\Property(property="id", type="integer",
                      example=1),
                        @OA\Property(property="title", type="string",
          example="Some title"),
                        @OA\Property(property="likes", type="integer",
          example="25")
 *                  ),
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Получение отдельного поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
            description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=2,
 *
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",
 *                 example=1),
 *                  @OA\Property(property="title", type="string",
 *     example="Some title"),
 *                  @OA\Property(property="likes", type="integer",
 *     example="25")
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Обновление отдельного поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=2,
 *     ),
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="title", type="string",
 *     example="Some title for edit"),
 *                     @OA\Property(property="likes", type="integer",
 *     example=30)
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer",
 *                 example=1),
 *                  @OA\Property(property="title", type="string",
 *     example="Some title"),
 *                  @OA\Property(property="likes", type="integer",
 *     example="25")
 *              ),
 *          ),
 *     ),
 * ),
 *
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Удаление отдельного поста",
 *     tags={"Post"},
 *     security={{ "bearerAuth": {} }},
 *
 *     @OA\Parameter(
            description="ID поста",
 *          in="path",
 *          name="post",
 *          required=true,
 *          example=2,
 *
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string",example="done"),
 *          ),
 *     ),
 * ),
 */
class PostController extends Controller
{


}
