<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Work;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __invoke()
    {
        $documents = Document::all();
        return view('main.documents.show', compact('documents'));
    }
}
