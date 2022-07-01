<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Work $work)
    {
$work->with(['images'])->get();
        return view('admin.works.show', compact('work'));
    }
}
