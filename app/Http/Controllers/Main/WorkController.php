<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function __invoke()
    {
        $works = Work::all();
        return view('main.work.work', compact('works'));
    }
}
