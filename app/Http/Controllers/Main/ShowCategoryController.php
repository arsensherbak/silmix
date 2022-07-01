<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowCategoryController extends Controller
{
    public function __invoke(Category $category)
    {

        return view('main.category.show', compact('category'));
    }
}
