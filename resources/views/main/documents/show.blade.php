@extends('layouts.app')

@section('content')
    <div>
       <div>
           @foreach($documents as $document)
               <div class="m-3 text-start">
               <a href="{{ $document->doc }}" class="h-3 text-white" download="{{$document->name}}"><span >{{$document->name}}</span></a>
               </div>
           @endforeach
       </div>
    </div>
@endsection


