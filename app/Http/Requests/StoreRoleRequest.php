<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array {
        return [
            'title' => 'required|string|max:25|unique:roles,title',
            'description' => 'nullable|string|max:250',
            'slug' => 'nullable|string|max:25|unique:roles,slug',
            'status' => 'nullable|integer|min:0|max:1'
        ];
    }
}
