<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRoleRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array {
        $roleId = $this->route('role') ? $this->route('role')->id : null;
    
        return [
            'title' => ['required', 'string', 'max:25', Rule::unique('roles')->ignore($roleId)],
            'slug' => ['required', 'string', 'max:25', Rule::unique('roles')->ignore($roleId)],
            'description' => ['nullable', 'string', 'max:250'],
            'status' => ['required', 'integer', 'min:0', 'max:1'],
        ];
    }
}
