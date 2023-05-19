<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Exception $e, $request) {
            return $this->handleException($request, $e);
        });
    }

    /**
     * Handle response from exception.
     *
     * @param Exception $exception
     * @return JsonResponse|null
     */
    private function handleException(Exception $exception): ?JsonResponse
    {
        return match (true) {
            $exception instanceof NotFoundHttpException => response()->json([
                'message' => 'Http not found.'
            ], 404),
            $exception instanceof MethodNotAllowedHttpException => response()->json([
                'message' => 'Method not allowed.'
            ], 405),
            $exception instanceof UnauthorizedHttpException => response()->json([
                'message' => 'Unauthorized.'
            ], 401),
            default => null,
        };

    }
}
