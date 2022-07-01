<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Work $work)
    {
        $work->delete();
        return redirect()->route('admin.work.index');
    }
}
