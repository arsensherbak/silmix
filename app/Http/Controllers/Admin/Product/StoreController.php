<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;

use App\Models\Foto;

use App\Models\Product;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if (isset($data['image'])) {
            $images = $data['image'];
        }
        unset($data['image']);
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/image', $data['img']);
        }
        $product = Product::firstOrCreate($data);
        if(isset($data['image'])) {
            foreach ($images as $image) {
                $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
//            $filePath = Storage::disk('public')->putFileAs('/images', $image, $name);
                Foto::create([
                    'image' => url('/storage/image/' . $name),
                    'product_id' => $product->id
                ]);

                \Intervention\Image\Facades\Image::make($image)->fit(500, 500)->encode('jpg', 90)->save(storage_path('app/public/image/' . $name));

            }
        }
        return redirect()->route('admin.product.index');
    }
}
