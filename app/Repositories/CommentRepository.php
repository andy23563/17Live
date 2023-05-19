<?php

namespace App\Repositories;

use App\Models\Comments;
use App\Exceptions\CommentsException;

class CommentRepository
{
    /**
     * @param int $pid
     * @param string $messages
     * @return Comments
     * @throws CommentsException
     */
    public function createComment(int $pid, string $messages): Comments
    {
        $comments = new Comments();
        $comments->pid = $pid;
        $comments->messages = $messages;
        if (!$comments->save()) {
            throw new CommentsException('建立留言失敗', 409);
        }

        return $comments;
    }
}
