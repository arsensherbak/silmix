<?php

namespace App\Http\Controllers\Admin\Document;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Document\StoreRequest;
use App\Models\Document;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $name = $data['doc']->getClientOriginalName();

        $puth = Storage::disk('public')->put('/doc', $data['doc']);

        Document::create([
            'doc' => url('/storage/' . $puth),
            'name'=> $name
        ]);
        return back();
    }
}
