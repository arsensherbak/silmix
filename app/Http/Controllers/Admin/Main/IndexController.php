<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Document;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
//        $date = Carbon::parse($product->created_at)->addMonth(1)->format('Y-m-d');
//
//        $yesday = Carbon::now()->format('Y-m-d');
//        dd($date);
        $categories= Category::count();
        $documents= Document::count();
        $products= Product::count();
        $works= Work::count();
        $users = User::count();
        return view('admin.main.index',
            compact('categories','documents',
                 'products','works', 'users'));
    }
}
