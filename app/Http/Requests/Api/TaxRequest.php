<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class TaxRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function forbiddenResponse()
    {
        return response([
            'message' => 'No tiene autorización para ejecutar esta acción!'
        ], 400);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|min:4',
            'porcentage' => 'required|numeric',
            'value' => 'numeric',
        ];
    }

    public function response(array $errors)
    {
        return response([
            'message' => 'El formulario contiene errores!',
            'errors' => $errors,
        ], 422);
    }
}
