<?php

namespace App\Http\Middleware;

use App\Repositories\PostRepository;
use Closure;
use Exception;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use App\Exceptions\PostsException;

class PostsExists extends Middleware
{
    /** @var PostRepository */
    private PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Handle an incoming request.
     * @param Request $request
     * @param Closure $next
     * @param mixed ...$guards
     * @return mixed
     * @throws PostsException
     */
    public function handle($request, Closure $next, ...$guards): mixed
    {
        $pid = $request->get('pid');

        $postExists = $this->postRepository->postExists($pid);

        if (!$postExists) {
            throw new PostsException("文章不存在", 409);
        }

        return $next($request);
    }
}
