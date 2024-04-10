<?php
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
class Article {
    public function __construct(
        public int $id,
        public string $name,
        public string $title,
        public array $content,
    ){

    }
}
$articles = [
        new Article(
                id: 1,
                name: 'learn-react',
                title: 'The Fastest Way to Learn React',
                content: [
                    "Welcome! Today we're going to be talking about the fastest way to
                    learn React. We'll be discussing some topics such as proin congue
                    ligula id risus posuere, vel eleifend ex egestas. Sed in turpis leo. 
                    Aliquam malesuada in massa tincidunt egestas. Nam consectetur varius turpis, 
                    non porta arcu porttitor non. In tincidunt vulputate nulla quis egestas. Ut 
                    eleifend ut ipsum non fringilla. Praesent imperdiet nulla nec est luctus, at 
                    sodales purus euismod.",
                    "Donec vel mauris lectus. Etiam nec lectus urna. Sed sodales ultrices dapibus. 
                    Nam blandit tristique risus, eget accumsan nisl interdum eu. Aenean ac accumsan 
                    nisi. Nunc vel pulvinar diam. Nam eleifend egestas viverra. Donec finibus lectus 
                    sed lorem ultricies, eget ornare leo luctus. Morbi vehicula, nulla eu tempor 
                    interdum, nibh elit congue tellus, ac vulputate urna lorem nec nisi. Morbi id 
                    consequat quam. Vivamus accumsan dui in facilisis aliquet.",
                    "Etiam nec lectus urna. Sed sodales ultrices dapibus. 
                    Nam blandit tristique risus, eget accumsan nisl interdum eu. Aenean ac accumsan 
                    nisi. Nunc vel pulvinar diam. Nam eleifend egestas viverra. Donec finibus lectus 
                    sed lorem ultricies, eget ornare leo luctus. Morbi vehicula, nulla eu tempor 
                    interdum, nibh elit congue tellus, ac vulputate urna lorem nec nisi. Morbi id 
                    consequat quam. Vivamus accumsan dui in facilisis aliquet.",
                ]
            ),new Article(
                id:2,
                name: 'learn-node',
                title: 'How to Build a Node Server in 10 Minutes',
                content: [
                    "In this article, we're going to be talking looking at a very quick way
                    to set up a Node.js server. We'll be discussing some topics such as proin congue
                    ligula id risus posuere, vel eleifend ex egestas. Sed in turpis leo. 
                    Aliquam malesuada in massa tincidunt egestas. Nam consectetur varius turpis, 
                    non porta arcu porttitor non. In tincidunt vulputate nulla quis egestas. Ut 
                    eleifend ut ipsum non fringilla. Praesent imperdiet nulla nec est luctus, at 
                    sodales purus euismod.",
                    "Donec vel mauris lectus. Etiam nec lectus urna. Sed sodales ultrices dapibus. 
                    Nam blandit tristique risus, eget accumsan nisl interdum eu. Aenean ac accumsan 
                    nisi. Nunc vel pulvinar diam. Nam eleifend egestas viverra. Donec finibus lectus 
                    sed lorem ultricies, eget ornare leo luctus. Morbi vehicula, nulla eu tempor 
                    interdum, nibh elit congue tellus, ac vulputate urna lorem nec nisi. Morbi id 
                    consequat quam. Vivamus accumsan dui in facilisis aliquet.`,
                    `Etiam nec lectus urna. Sed sodales ultrices dapibus. 
                    Nam blandit tristique risus, eget accumsan nisl interdum eu. Aenean ac accumsan 
                    nisi. Nunc vel pulvinar diam. Nam eleifend egestas viverra. Donec finibus lectus 
                    sed lorem ultricies, eget ornare leo luctus. Morbi vehicula, nulla eu tempor 
                    interdum, nibh elit congue tellus, ac vulputate urna lorem nec nisi. Morbi id 
                    consequat quam. Vivamus accumsan dui in facilisis aliquet.",
                ]
          ),new Article(
                 id:3,
                name: 'mongodb',
                title: 'Learn MongoDB',
                content: [
                    "Today is the day I talk about something which scares most people: resumes.
                    In reality, I'm not sure why people have such a hard time with proin congue
                    ligula id risus posuere, vel eleifend ex egestas. Sed in turpis leo. 
                    Aliquam malesuada in massa tincidunt egestas. Nam consectetur varius turpis, 
                    non porta arcu porttitor non. In tincidunt vulputate nulla quis egestas. Ut 
                    eleifend ut ipsum non fringilla. Praesent imperdiet nulla nec est luctus, at 
                    sodales purus euismod.",
                    "Donec vel mauris lectus. Etiam nec lectus urna. Sed sodales ultrices dapibus. 
                    Nam blandit tristique risus, eget accumsan nisl interdum eu. Aenean ac accumsan 
                    nisi. Nunc vel pulvinar diam. Nam eleifend egestas viverra. Donec finibus lectus 
                    sed lorem ultricies, eget ornare leo luctus. Morbi vehicula, nulla eu tempor 
                    interdum, nibh elit congue tellus, ac vulputate urna lorem nec nisi. Morbi id 
                    consequat quam. Vivamus accumsan dui in facilisis aliquet.",
                    "Etiam nec lectus urna. Sed sodales ultrices dapibus. 
                    Nam blandit tristique risus, eget accumsan nisl interdum eu. Aenean ac accumsan 
                    nisi. Nunc vel pulvinar diam. Nam eleifend egestas viverra. Donec finibus lectus 
                    sed lorem ultricies, eget ornare leo luctus. Morbi vehicula, nulla eu tempor 
                    interdum, nibh elit congue tellus, ac vulputate urna lorem nec nisi. Morbi id 
                    consequat quam. Vivamus accumsan dui in facilisis aliquet.",
                ]
          )
    ];
Route::get('/', function (){
    return redirect()->route('article.articles');
});

Route::get('/articleList', function () use($articles){
    return view('articles',[
        'articles' => $articles
    ]);
})->name('article.articles');

Route::get('/show/{id}' , function ($id) use($articles){
    $task = collect($articles)->firstWhere('id', $id);
    if(!$task){
        abort(404);
    }
    return view('show',['article'=>$task]);
})->name('article.show');
