<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Work\UpdateRequest;
use App\Models\Work;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Work $work)
    {
        $data = $request->validated();

        $work->update($data);
        return view('admin.works.show', compact('work'));
    }
}
