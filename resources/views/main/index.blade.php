@extends('layouts.app')

@section('content')
    <div>
        <h3 class="text-start category h-3 m-3 "><strong>Наша продукция</strong></h3>
        <div class="category" style=" max-width: 900px;">

            @foreach($categories as $category)
                <div class="card d-flex flex-column align-items-center m-2"
                     style="background:rgb(229,233,228);width: 200px; height: 400px">
                    <div class="text-center">
                        <img class="card-img-top mt-2" style="width: 150px; height: 150px; object-fit: fill; "
                             src="{{$category->images === null ? url('s.png'): url('storage/' . $category->images)}}"
                             alt="Card image cap">
                        <div>
                            <h5 class="card-title text-center"
                                style="width: 200px;height:50px; word-wrap: break-word;">{{$category->title}}</h5>
                        </div>
                    </div>

                    <div class="text-center m-1" style="overflow: hidden; flex: 1 1 auto;width: 200px">
                        <div style="overflow: hidden; width: 100%" >{!! $category->description !!}</div></div>
                    <div>
                        <a href="{{route('category.product', $category->id)}}" class="btn btn-outline-dark mb-2">перейти</a>

                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection
