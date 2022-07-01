@extends('layouts.app')

@section('content')
    <div>

        <div class="text-center m-3" style="white-space: pre-wrap;">
            <h4>Описание продукта <strong>{{$product->title}}</strong></h4>
            <div style="white-space: normal; max-width: 100%">{!! $product->description !!}</div>
        </div>
        <div class="d-flex justify-content-center flex-wrap">
                <div class="fotorama" data-nav="thumbs" data-width="100%"
                     data-ratio="500/500"
                     data-minwidth="300"
                     data-maxwidth="400"
                     data-minheight="300"
                     data-maxheight="500">
                    @foreach($product->fotos as $foto)
                        <img src="{{$foto->image}}">
                    @endforeach
                </div>


            <div>
                <div class="product" class="m-3">
                    <div class="card">
                        <div class="card-body table-responsive p-0" style="background:rgb(229,233,228)">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th><strong>Цена</strong></th>
                                    <th><strong>{{$product->price}} грн</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><strong>Цвет</strong></td>
                                    <td><strong>{{ empty($product->color)? 'серый' : $product->color}}</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Вес</strong></td>
                                    <td><strong>{{empty($product->weight)? 50 : $product->weight}} кг</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Упаковка</strong></td>
                                    <td><strong>{{$product->package === null ? 'многослойные бумажные мешки': $product->package }}</strong></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </div>

@endsection
