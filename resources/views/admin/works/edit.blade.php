@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Редактировать описание работ</h3>
                    <form action="{{route('admin.work.update', $work->id)}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <textarea name="title" class="form-control col-3 mb-4" rows="4" cols="50">{{$work->title}}</textarea>
                        @error('title')
                        <div class="text-danger mb-4">это поле обязательное</div>
                        @enderror

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>
        </section>

    </div>

@endsection
