<?php

namespace App\Http\Controllers;

use App\Exceptions\PostsException;
use App\Services\PostService;
use Exception;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\NewPostRequest;

class PostController extends Controller
{
    private PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @OA\Post(
     *     path="/api/v1/posts/new",
     *     tags={"文章"},
     *     summary="新增文章",
     *     description="新增文章",
     *     @OA\RequestBody(
     *         required=true,
     *         description="",
     *         @OA\JsonContent(ref="#/components/schemas/ReqNewPosts")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="操作成功",
     *         @OA\JsonContent(ref="#/components/schemas/ResSuccessNewPosts")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="操作失敗",
     *         @OA\JsonContent(ref="#/components/schemas/ResNewMessageFail")
     *     )
     * )
     *
     * @param NewPostRequest $request
     * @return JsonResponse
     * @throws PostsException
     */
    public function createPost(NewPostRequest $request): JsonResponse
    {
        $title = $request->title;
        $content = $request->content;

        try {
            $posts = $this->postService->createPost($title, $content);

            return response()->json(['msg' => 'success', 'pid' => $posts->id]);
        } catch (PostsException $e) {
            throw new PostsException($e->getMessage(), $e->getCode());
        }
    }
}
