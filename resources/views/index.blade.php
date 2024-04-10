<div>
    Hello This is a Task list
</div>
<div>
    @if(count($articles))
        @foreach($articles as $article)    
            <div>{{$article->name}}</div>
        @endforeach
    
    @else
        <div> There are no task</div>
    @endif