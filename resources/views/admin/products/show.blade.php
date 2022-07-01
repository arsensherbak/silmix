@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="m-2 mb-3">>
                <a href="{{route('admin.product.index')}}"> Назад</a>
            </div>

            <h3 class="text-center">{{$product->title}}</h3>

            <div class="m-2 mb-3"><a href="{{route('admin.product.edit', $product->id)}}">
                    <i class="far fa-edit"></i>Редактировать описание</a></div>

            <div>
                <div class="text-center">
                    <div> <h4>Описание продукта</h4> </div>
                    <div class="m-3 "> {!! $product->description !!}</div>
                    <div>
                        <p>Цена: {{$product->price === null ? '70': $product->price }} грн,
                            цвет: {{$product->color === null ? 'серый': $product->color }},
                            вес: {{$product->weight === null ? '50': $product->weight }} кг,
                            упаковка: {{$product->package === null ? 'многослойные бумажные мешки': $product->package }},
                        </p>
                        <div>
                            <h5>Главное фото</h5>
                            <img src="{{$product->img === null ? url('s.png') : url('storage/' . $product->img) }}" alt="product" style="width: 150px;">
                        </div>
                    </div>
                </div>
                <div class="m-2">
                    <div class="mt-3">добавить фото в галерею</div>
                    <form class="mb-3 w-50 mb-3" action="{{route('admin.product.image.store', $product->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="custom-file">
                                <input
                                    type="file"
                                    class="custom-file-input"
                                    name="image"
                                    accept=".jpg, .png">
                                <label class="custom-file-label">Загрузите фото</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Загрузить</button>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-around flex-wrap m-5">
                @foreach($product->fotos as $foto)
                    <div style="height: 100px; width:100px;" >
                        <img
                            src="{{$foto->image}}"
                            alt="foto"
                            class="w-100 h-100">
                        <form action="{{route('admin.product.foto.delete', $foto->id)}}" method="post" class="mt-2">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">
                                Удалить
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>

        </div>


@endsection
