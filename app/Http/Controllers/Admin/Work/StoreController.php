<?php

namespace App\Http\Controllers\Admin\Work;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Work\StoreRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $images = $data['image'];
        unset($data['image']);
        $work = Work::firstOrCreate($data);
        foreach ($images as $image) {
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
//            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);
            Image::create([
                'image' => url('/storage/image/' . $name),
                'work_id' => $work->id
            ]);

            \Intervention\Image\Facades\Image::make($image)->fit(500, 500)->encode('jpg', 90)->save(storage_path('app/public/image/' . $name));

        }
        return redirect()->route('admin.work.index');
    }
}
