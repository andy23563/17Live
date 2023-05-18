<?php

namespace App\Services;

use App\Models\Posts;
use App\Repositories\PostRepository;
use ErrorException;

class PostService
{

    public function __construct(protected PostRepository $postRepository)
    {
    }

    /**
     * @param string $title
     * @param string $content
     * @return Posts
     * @throws ErrorException
     */
    public function createPost(string $title, string $content) : Posts
    {
        return $this->postRepository->createPost($title, $content);
    }
}
