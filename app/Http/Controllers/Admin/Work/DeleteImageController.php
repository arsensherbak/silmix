<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class DeleteImageController extends Controller
{
    public function __invoke(Image $image)
    {

        $image->delete();
        return back();
    }
}
