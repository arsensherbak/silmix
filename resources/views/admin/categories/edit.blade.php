@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Редактировать название категорию</h3>
                    <form action="{{route('admin.category.update', $category->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="text" name="title" class="form-control col-3 mb-4"
                               placeholder="{{$category->title}}" value="{{$category->title}}">
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror
                        <div class="form-group">
                            <div><label>Короткое описание</label></div>
                            <textarea id="summernote" name="description">{!! $category->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Загрузите изображение</label>
                            <div class="w-25">
                                <img src="{{$category->images === null ? url('s.png'): url('storage/' . $category->images)}}" alt="image" class="w-50">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile"
                                           name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                            @error('image')
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
