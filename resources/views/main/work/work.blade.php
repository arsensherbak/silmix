@extends('layouts.app')

@section('content')
    <div class="mb-3 d-flex flex-column align-items-center">

        @foreach($works as $work)
            <div class="d-flex justify-content-around flex-wrap mt-3 w-100">

                <div class="fotorama" data-nav="thumbs" data-width="100%"
                     data-ratio="500/500"
                     data-minwidth="300"
                     data-maxwidth="400"
                     data-minheight="300"
                     data-maxheight="500">
                    @foreach($work->images as $img)
                        <img src="{{$img->image}}">
                    @endforeach
                </div>
                <div class="m-1">
                    <h3 class="work-header" style="max-width: 500px; height: 100%; word-wrap: break-word;">{!! $work->title !!}</h3>
                </div>
            </div>
        @endforeach
    </div>
@endsection
