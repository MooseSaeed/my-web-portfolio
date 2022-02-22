<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required'
        ]);
        $attributes['slug'] = Str::slug($attributes['name']);

        Category::create($attributes);

        return redirect('/admin/categories')->with('success', 'Your category has been published successfully');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    public function update(Category $category)
    {
        $attributes = request()->validate([
            'name' => 'required'
        ]);
        $attributes['slug'] = Str::slug($attributes['name']);

        $category->update($attributes);

        return redirect('/admin/categories')->with('success', 'Your category has been updated successfully');
    }

    public function destroy(Category $category)
    {

        $category->delete();

        return redirect('/admin/categories')->with('success', 'Category DELETED!');
    }
}
