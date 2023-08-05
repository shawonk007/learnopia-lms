<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // $roleId = $this->route('role') ? $this->route('role')->id : null;
        // $roleId = $this->route('role')->id;

        return [
            // 'title' => ['required', 'string', 'max:25', Rule::unique('roles')->ignore($roleId)],
            // // 'title' => ['required', 'string', 'maxlength' => 25, Rule::unique('roles')->ignore($roleId)],
            // // 'slug' => ['required', 'string', 'maxlength' => 25, Rule::unique('roles')->ignore($roleId)],
            // 'slug' => ['required', 'string', 'max:25', Rule::unique('roles')->ignore($roleId)],
            // // 'description' => ['nullable', 'string', 'maxlength' => 250],
            // 'description' => ['nullable', 'string', 'max:250'],
            // 'status' => ['nullable', 'integer', 'min:0', 'max:1'],
            // 'title' => 'required|string|maxlength:25',
            'title' => 'required|string|max:25',
            // 'description' => 'nullable|string|maxlength:250',
            'description' => 'nullable|string|max:250',
            // 'slug' => 'required|string|maxlength:25',
            'slug' => 'required|string|max:25',
            'status' => 'nullable|integer|min:0|max:1'
        ];
    }
}
