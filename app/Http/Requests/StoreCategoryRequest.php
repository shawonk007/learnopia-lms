<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest {
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
            'title' => ['required', 'string', 'max:50', Rule::unique('categories')->ignore($this->route('id'))],
            'description' => 'nullable|string|max:250',
            'parent_id' => ['nullable', 'integer'],
            'slug' => ['nullable', 'string', 'max:25', Rule::unique('categories')->ignore($this->route('id'))],
            'status' => 'nullable|integer|min:0|max:1',
            'is_featured' => 'nullable|boolean'
        ];
    }
    
    public function main() {
        return $this->input('main_cat');
    }

    public function sub() {
        return $this->input('sub_cat');
    }
}
