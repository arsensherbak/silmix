<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;

use App\Models\Foto;
use App\Models\Image;
use App\Models\Product;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\AbstractColor;

class StoreImageController extends Controller
{
    public function __invoke(Request $request, Product $product)
    {

        $data = $request->validate([
            'image' => 'required'
        ]);
        $image = $data['image'];
        $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();


        Foto::create([
            'image'=>url('storage/image/' . $name),
            'product_id'=> $product->id
        ]);

        \Intervention\Image\Facades\Image::make($image)->resize(500, 500)->encode('jpg', 90)->save(storage_path('app/public/image/' . $name));
        return back();
    }
}
