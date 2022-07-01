@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div><a href="{{route('admin.category.index')}}">Назад</a></div>
                <div class="row">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Название категории</th>
                            <th>Изображение</th>
                            <th>Редактировать</th>

                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$category->title}} </td>
                            <td style="height: 700px; width:500px;" class="border-0 bg-transparent"><img
{{--                                    src="{{$category->images == 'product.png'? url( $category->images):url('storage/' . $category->images) }}"--}}
                                    src="{{$category->images === null ? url('s.png'): url('storage/' . $category->images)}}"
                                    alt="image"
                                    class="w-50 h-25 img-fluid"
                                    style="object-fit: fill"></td>
                            <td>
                                <a href="{{route('admin.category.edit', $category->id)}}"><i
                                        class="far fa-edit"></i></a>
                            </td>
                        </tr>


                        </tbody>
                    </table>

                </div>

            </div>
            <div>
                <div>Описание категории</div>
                <div>{!! $category->description !!}</div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
