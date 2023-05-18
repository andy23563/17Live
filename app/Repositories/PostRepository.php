<?php

namespace App\Repositories;

use App\Models\Posts;
use ErrorException;

class PostRepository
{

    /**
     * @param string $title
     * @param string $content
     * @return Posts
     * @throws ErrorException
     */
    public function createPost(string $title, string $content): Posts
    {
        $posts = new Posts();
        $posts->title = $title;
        $posts->content = $content;
        if (!$posts->save()) {
            throw new ErrorException('建立文章失敗');
        }

        return $posts;
    }

    /**
     * @param int $pid
     * @return bool
     */
    public function postExists(int $pid): bool
    {
        return Posts::query()->where('id', $pid)->exists();
    }
}
