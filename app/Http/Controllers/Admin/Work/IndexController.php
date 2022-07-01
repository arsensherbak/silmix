<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $works = Work::all();

        return view('admin.works.index', compact('works'));
    }
}
