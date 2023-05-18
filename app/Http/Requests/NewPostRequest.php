<?php

namespace App\Http\Requests;

use Exception;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

/**
 * @property string $title
 * @property string $content
 */
class NewPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'content' => 'required',
        ];
    }

    /**
     * @param Validator $validator
     * @return JsonResponse
     * @throws Exception
     */
    protected function failedValidation(Validator $validator): JsonResponse
    {
        return response()->json($validator->errors(), 422);
    }
}
