<?php


use Illuminate\Support\Facades\Route;


Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Main'], function (){
    Route::get('/', IndexController::class)->name('category');
    Route::get('/{category}/products', ShowCategoryController::class)->name('category.product');
    Route::get('/{product}/show', ProductShowController::class)->name('product.show');
    Route::get('/contact', ContactController::class)->name('contact');
    Route::get('/work', WorkController::class)->name('work');
    Route::get('/document', DocumentController::class)->name('document');
    Route::get('/info', InfoController::class)->name('info');
});
Route::group(['namespace'=>'App\Http\Controllers\Admin', 'prefix'=> 'admin', 'middleware'=>['auth','admin']], function(){
    Route::group(['namespace'=>'Main'], function (){
        Route::get('/', IndexController::class)->name('admin');
    });
    Route::group(['namespace'=>'Category', 'prefix'=>'category'], function (){
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', DeleteController::class)->name('admin.category.delete');
    });
    Route::group(['namespace'=>'Product', 'prefix'=>'product'], function (){
        Route::get('/', IndexController::class)->name('admin.product.index');
        Route::get('/create', CreateController::class)->name('admin.product.create');
        Route::post('/', StoreController::class)->name('admin.product.store');
        Route::post('/{product}/image', StoreImageController::class)->name('admin.product.image.store');
        Route::get('/{product}', ShowController::class)->name('admin.product.show');
        Route::get('/{product}/edit', EditController::class)->name('admin.product.edit');
        Route::patch('/{product}', UpdateController::class)->name('admin.product.update');
        Route::delete('/{product}', DeleteController::class)->name('admin.product.delete');
        Route::delete('/{foto}/image', DeleteImageController::class)->name('admin.product.foto.delete');

    });
    Route::group(['namespace'=>'Work', 'prefix'=>'work'], function (){
        Route::get('/', IndexController::class)->name('admin.work.index');
        Route::get('/create', CreateController::class)->name('admin.work.create');
        Route::post('/', StoreController::class)->name('admin.work.store');
        Route::post('/{work}/image', StoreImageController::class)->name('admin.work.image.store');
        Route::get('/{work}', ShowController::class)->name('admin.work.show');
        Route::get('/{work}/edit', EditController::class)->name('admin.work.edit');
        Route::patch('/{work}', UpdateController::class)->name('admin.work.update');
        Route::delete('/{work}', DeleteController::class)->name('admin.work.delete');
        Route::delete('/{image}/image', DeleteImageController::class)->name('admin.work.image.delete');
    });
    Route::group(['namespace'=>'Document', 'prefix'=>'document'], function (){
        Route::get('/', IndexController::class)->name('admin.document.index');
        Route::post('/', StoreController::class)->name('admin.document.store');
        Route::delete('/{document}', DeleteController::class)->name('admin.document.delete');
    });
    Route::group(['namespace'=>'User', 'prefix'=>'user'], function (){
        Route::get('/', IndexController::class)->name('admin.user.index');
        Route::get('/create', CreateController::class)->name('admin.user.create');
        Route::post('/', StoreController::class)->name('admin.user.store');
        Route::delete('/{user}', DeleteController::class)->name('admin.user.delete');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
