@extends('layouts.app')
@section('title',"Artiles")
@section('content')
<div>
    @if(count($articles))
        @foreach($articles as $content)    
            <h3><a href="/show/{{$content->id}}" >{{$content->title}}</a></h3>
            <div>{{substr($content->content[0],150)}}...</div>
        @endforeach
    @else
        <div> There are no task</div>
    @endif
@endsection