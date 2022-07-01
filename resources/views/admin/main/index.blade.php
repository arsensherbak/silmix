@extends('admin.layouts.app')

@section('content')

    <div class="content-wrapper" style="min-height: 366px;">
        <!-- Content Header (Page header) -->

        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row d-flex justify-content-around">

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"> <i class="nav-icon fas fa-archive"></i></span>

                            <div class="info-box-content">
                                <a href="{{route('admin.category.index')}}" class="text-white">
                                <span class="info-box-text">Категории</span>
                                </a>
                                <span class="info-box-number">
                 {{$categories}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="nav-icon fas fa-briefcase"></i>
                            </span>

                            <div class="info-box-content">
                                <a href="{{route('admin.document.index')}} class="text-white">
                                <span class="info-box-text">Документы</span>
                                </a>
                                <span class="info-box-number">
                 {{$documents}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1 text-danger ">
                                <i class="nav-icon fas fa-photo-video"></i>
                            </span>

                            <div class="info-box-content">
                                <a href="{{route('admin.work.index')}}" class="text-white">
                                <span class="info-box-text">Наши работы</span>
                                </a>
                                <span class="info-box-number">
                 {{$works}}
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">

                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1">
                                <i class="nav-icon fas fa-th"></i>
                            </span>

                            <div class="info-box-content">
                                <a href="{{route('admin.product.index')}}" class="text-white">
                                <span class="info-box-text">Продукт</span>
                                </a>
                                <span class="info-box-number">
                  {{$products}}

                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>


                    <div class="clearfix hidden-md-up"></div>


                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1">
                               <i class="nav-icon fas fa-user-cog"></i>
                            </span>

                            <div class="info-box-content">
                                <a href="{{route('admin.user.index')}}" class="text-white">
                                <span class="info-box-text">Админы</span>
                                </a>
                                <span class="info-box-number">{{$users}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>


            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection
