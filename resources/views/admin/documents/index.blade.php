@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12">
                        <div class="container-fluid">
                            <div class="col-12">
                                <h3>Добавить документ</h3>
                                <form action="{{route('admin.document.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="doc"
                                                   accept=".pdf,.doc,.docx, .txt">
                                            <label class="custom-file-label">Загрузите document</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>

                        </div>

                        @foreach($documents as $document)
                            <div class="d-flex justify-content-start m-3">
                                <div>{{$document->name}}</div>


                                <form action="{{route('admin.document.delete', $document->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="far fa-trash-alt text-danger"></i></button>

                                </form>
                            </div>
                        @endforeach


                    </div>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
