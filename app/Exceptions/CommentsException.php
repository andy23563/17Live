<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class CommentsException extends Exception
{
    public function report()
    {
        // do something
    }

    public function render(): JsonResponse
    {
        return response()->json([
            'msg' => $this->getMessage()
        ], $this->getCode());
    }

}
