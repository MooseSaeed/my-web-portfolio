<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    public function list(Category $category)
    {
        return response()->json([
            'categories' => \App\Models\Category::all()
        ], Response::HTTP_OK);
    }
}
