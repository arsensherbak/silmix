@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="m-2 mb-3">>
                <a href="{{route('admin.work.index')}}"> Назад</a>
            </div>

                <div>
                    <h4 class="text-center"> Описание</h4>
                    <div style=" height: 50%; word-wrap: break-word; margin: 10px auto;">
                        {!! $work->title !!}</div>
                </div>

            <div class="m-2 mb-3"><a href="{{route('admin.work.edit', $work->id)}}">
                    <i class="far fa-edit"></i>Редактировать описание</a></div>

            <div>
                <div class="m-2">
                <div>добавить фото</div>
                <form class="mb-3 w-50 mb-3" action="{{route('admin.work.image.store', $work->id)}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <div class="custom-file">
                            <input
                                type="file"
                                class="custom-file-input"
                                name="image"
                                accept="image/*">
                            <label class="custom-file-label">Загрузите фото</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Загрузить</button>
                </form>
                </div>
            </div>
            <div class="d-flex justify-content-around flex-wrap">
                @foreach($work->images as $image)
                    <div style="height: 100px; width:100px;" >
                        <img
                            src="{{$image->image}}"
                            alt="image"
                            class="w-100 h-100">
                        <form action="{{route('admin.work.image.delete', $image->id)}}" method="post" class="mt-2">
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
