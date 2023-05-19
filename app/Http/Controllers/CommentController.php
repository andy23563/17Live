<?php

namespace App\Http\Controllers;

use App\Exceptions\CommentsException;
use App\Http\Requests\NewCommentRequest;
use App\Services\CommentService;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    private CommentService $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    /**
     * @OA\Post(
     *     path="/api/v1/comment/new",
     *     tags={"留言"},
     *     summary="新增留言",
     *     description="新增留言",
     *     @OA\RequestBody(
     *         required=true,
     *         description="",
     *         @OA\JsonContent(ref="#/components/schemas/ReqNewComments")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="操作成功",
     *         @OA\JsonContent(ref="#/components/schemas/ResSuccess")
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="操作失敗",
     *         @OA\JsonContent(ref="#/components/schemas/ResPostsExists")
     *     )
     * )
     *
     * @param NewCommentRequest $request
     * @return JsonResponse
     * @throws CommentsException
     */
    public function createMessage(NewCommentRequest $request): JsonResponse
    {
        $pid = $request->pid;
        $messages = $request->messages;

        try {
            $this->commentService->createComment($pid, $messages);

            return response()->json(['msg' => 'success']);
        } catch (CommentsException $e) {
            throw new CommentsException($e->getMessage(), $e->getCode());
        }
    }
}
