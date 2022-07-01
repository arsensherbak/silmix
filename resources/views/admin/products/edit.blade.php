@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Редактировать название бренда</h3>
                    <form action="{{route('admin.product.update', $product->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="text" name="title" class="form-control col-3 mb-4"
                               placeholder="{{$product->title}}" value="{{$product->title}}">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        @if($product->img !== null)
                        <div>
                            <h4 >Главное изображение товара</h4>
                            <img src="{{url('storage/' . $product->img)}}" alt="продукт"
                                 style="width: 150px;">
                            <h6>если не указать будет стандартное</h6>
                            <input type="file" name="img" class="form-control col-4 mb-2">
                        </div>
                        @endif
                        <div class="form-group d-flex flex-column">
                            <input type="number" name="price" class="form-control col-3 mb-4" placeholder="{{$product->price}}">
                            @error('price')
                            <div class="text-danger mb-4">Нужно подтвердить цену</div>
                            @enderror
                        </div>
                        <div class="form-group  d-flex flex-column " >
                            <label>Цвет (по умолчанию будет серый)</label>
                            <input type="text" name="color" class="form-control col-3 mb-4"
                                   placeholder="{{$product->color}}">
                        </div>
                        <div class="form-group d-flex flex-column">
                            <label>Вес (по умолчанию будет серый)</label>
                            <input type="text" name="wight" class="form-control col-3 mb-4"
                                   placeholder="{{$product->wight}}">
                        </div>
                        <div class="form-group d-flex flex-column">
                            <label>Упаковка (по умолчанию будет многослойные бумажные мешки)</label>
                            <input type="text" name="package" class="form-control col-3 mb-4"
                                   placeholder="{{$product->package}}">
                        </div>
                        <div class="form-group">
                          <textarea id="summernote" name="description">{!! $product->description !!}</textarea>
                            @error('description')
                            <div class="text-danger mb-4">это поле обязательное</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>
        </section>

    </div>

@endsection
