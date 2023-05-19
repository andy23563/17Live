<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use App\Repositories\PostRepository;
use App\Exceptions\CommentsException;

class CommentService
{

    public function __construct(protected CommentRepository $commentRepository, protected PostRepository $postRepository)
    {
    }

    /**
     * @param int $pid
     * @param string $messages
     * @return void
     * @throws CommentsException
     */
    public function createComment(int $pid, string $messages): void
    {
        try {
            $this->commentRepository->createComment($pid, $messages);
        } catch (CommentsException $e) {
            throw new CommentsException($e->getMessage(), $e->getCode());
        }
    }
}
