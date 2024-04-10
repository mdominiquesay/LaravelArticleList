
@extends('layouts.app')
@section('title',$article->title)

@section('content')
    <p>{{$article->content[0]}}</p>

    @foreach($article->content as $content)    
        <div>{{$content}}</div>
    @endforeach
@endsection