<?php

namespace App\Repositories;

use App\Models\Comments;
use ErrorException;

class CommentRepository
{
    /**
     * @param int $pid
     * @param string $messages
     * @return Comments
     * @throws ErrorException
     */
    public function createComment(int $pid, string $messages): Comments
    {
        $comments = new Comments();
        $comments->pid = $pid;
        $comments->messages = $messages;
        if (!$comments->save()) {
            throw new ErrorException('建立留言失敗');
        }

        return $comments;
    }
}
