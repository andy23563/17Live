<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use App\Repositories\PostRepository;
use ErrorException;
use Exception;

class CommentService
{

    public function __construct(protected CommentRepository $commentRepository, protected PostRepository $postRepository)
    {
    }

    /**
     * @param int $pid
     * @param string $messages
     * @return void
     * @throws ErrorException
     * @throws Exception
     */
    public function createComment(int $pid, string $messages) : void
    {
        $this->commentRepository->createComment($pid, $messages);
    }
}
