<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
        $cats = Category::all();
        return view('admin.category.index', compact('cats'));
        return response()->json($cats);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
        $mainCat = Category::whereNull('parent_id')->get();
        return view('admin.category.create', compact('mainCat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request) {
        //
        $data = $request->validated();
        $parent = $request->sub() ?? $request->main() ?? null;
        Category::create(array_merge($data, ['parent_id' => $parent]));
        return redirect()->route('category.create')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category) {
        //
        $mainCat = Category::whereNull('parent_id')->get();
        return view('admin.category.edit', compact(['category', 'mainCat']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category) {
        //
    }
}
