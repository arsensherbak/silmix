<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Work;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function __invoke()
    {
        $documents = Document::all();
        return view('main.info.index', compact('documents'));
    }
}
