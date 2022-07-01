@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Добавить продукт</h3>
                    <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control col-3 mb-4 w-50"
                               placeholder="Введите название продукта">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div><h4 class="text-black">Короткое описание продукта</h4></div>
                        <div>
                            <textarea id="summernote" name="description" style=""></textarea>
                        </div>
                        <div>
                            <h4 >Главное изображение товара</h4>
                            <h6>если не указать будет стандартное
                                <img src="{{url('s.png')}}" alt="продукт" style="width: 200px;"></h6>
                            <input type="file" name="img" class="form-control col-4">
                        </div>

                        <div class="form-group w-50">
                            <label>Укажите категорию продукта</label>
                            <select class="form-control col-4" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="text" name="price" class="form-control col-4 mb-4 w-25"
                               placeholder="Укажите цену">
                        @error('price')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div>
                            <h6>если не указать будет серый</h6>
                            <input type="text" name="color" class="form-control col-4 mb-4 w-50"
                                   placeholder="цвет смеси">
                        </div>
                        <div>
                            <h6>если не указать будет 50 кг</h6>
                            <input type="text" name="weight" class="form-control col-4 mb-4 w-50"
                                   placeholder="вес смеси">
                        </div>
                       <div>
                           <h6>если не указать будет многослойные бумажные мешки</h6>
                           <input type="text" name="package" class="form-control col-4 mb-4 w-50"
                                  placeholder="упаковка смеси w-50">
                       </div>

                        <div class="input-group w-50">
                            <h5>Фотогалерея товара, по умолчанию будет стандартное изображение</h5>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input
                                        type="file"
                                        class="custom-file-input"
                                        name="image[]"
                                        accept=".jpg, .png"
                                        multiple>
                                    <label class="custom-file-label">Загрузите фото продукта</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
