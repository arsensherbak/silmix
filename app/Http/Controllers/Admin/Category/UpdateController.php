<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        if (isset($data['images'])) {
            $data['images'] = Storage::disk('public')->put('/image', $data['images']);
        }
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }
}
