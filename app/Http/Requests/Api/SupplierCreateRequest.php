<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class SupplierCreateRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|string|min:5',
            'nit' => 'required|digits:7|numeric',
            'phone' => 'required',
        ];
    }
    
    /**
     * Response on validation fails
     *
     * @param  array  $errors Validation errors
     * @return Rsponse        JSON With error data
     */
    public function response(array $errors) {
        return response([
            'message' => 'El formularion contiene errores!',
            'errors' => $errors,
        ], 422);
    }
}
