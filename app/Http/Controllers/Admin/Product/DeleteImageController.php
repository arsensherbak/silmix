<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Foto;
use App\Models\Image;
use Illuminate\Http\Request;

class DeleteImageController extends Controller
{
    public function __invoke(Foto $foto)
    {
        $foto->delete();
        return back();
    }
}
