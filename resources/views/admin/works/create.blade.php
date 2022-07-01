@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <h3>Добавление описания и фото к категории наши работы</h3>
                    <form action="{{route('admin.work.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea id="summernote" name="title"></textarea>
                        </div>
                        <div>
                            @error('title')
                            <div class="text-danger mb-4">это поле обязательное</div>
                            @enderror
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input
                                    type="file"
                                    class="custom-file-input"
                                    name="image[]"
                                    accept=".jpj, .png"
                                    multiple>
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
