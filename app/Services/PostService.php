<?php

namespace App\Services;

use App\Http\Requests\NewCommentRequest;
use App\Models\Posts;
use App\Repositories\PostRepository;
use \App\Exceptions\PostsException;
use Illuminate\Support\Facades\Log;

class PostService
{

    public function __construct(protected PostRepository $postRepository)
    {
    }

    /**
     * @param string $title
     * @param string $content
     * @return Posts
     * @throws PostsException
     */
    public function createPost(string $title, string $content) : Posts
    {
        try {
            return $this->postRepository->createPost($title, $content);
        } catch (PostsException $e) {
            throw new PostsException($e->getMessage(), $e->getCode());
        }
    }
}
