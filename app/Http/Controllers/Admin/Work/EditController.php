<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Work $work)
    {
        return view('admin.works.edit', compact('work'));
    }
}
