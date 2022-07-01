@extends('layouts.app')

@section('content')
    <div>
        <h3 class="text-start h-3 m-3 work-header"><strong>Продукция категории {{$category->title}}</strong></h3>
        <div class="d-flex flex-wrap justify-content-start align-items-center" style=" max-width: 900px;">

            @foreach($category->products as $product)
                <div class="card d-flex flex-column align-items-center m-3" style="width: 200px;background:rgb(229,233,228)">
                    <img class="card-img-top mt-2" style="width: 150px; height: 150px; object-fit: fill; "
                         src="{{$product->img === null ? url('s.png'): url('storage/' . $product->img)}}"  alt="Card image cap">

                    <div class="card-body overflow-hidden" >
                        <h5 class="card-title text-center" style="width: 200px;height:50px; word-wrap: break-word;">{{$product->title}}</h5>
                    </div>
                    <a href="{{route('product.show', $product->id)}}"
                       class="btn btn-outline-dark mb-3 text-center mb-2">Детали</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
