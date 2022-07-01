@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Добавить категорию</h3>
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control col-3 mb-4"
                               placeholder="Введите название категории">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="input-group d-flex flex-column">
                            <div><label>Короткое описание</label></div>
                           <div class="w-50">
                               <textarea id="summernote" name="description" class="w-50"></textarea>
                           </div>
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input"  name="images"
                                >
                                <label class="custom-file-label">Загрузите фото категории</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
