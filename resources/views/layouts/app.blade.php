<!DOCTYPE html>
<html>
    <head>
        <title>Laravel 10 Article List</title>
    </head>
<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
            <a href="/about">About</a>
            </li>
            <li>
            <a href="/articleList">Articles</a>
            </li>
        </ul>
    </nav>
    <h1>
        @yield('title')
    </h1>
    <div >
        @yield('content')
    </div>
</body>
</html>