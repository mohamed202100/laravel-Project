<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @include( 'layout.header' )
        <title>Laravel Library</title>

    </head>
    <body>

        <nav>
            <ul class="row">
                <li class="col-2"><a href="/" id="home-link"><i class="fa-solid fa-house"></i> Home</a></li>
                <li class="col-2"><a href="/books/create">Create Book</a></li>
                <li class="col-2"><a href="/books/index">Show Books</a></li>
            </ul>
        </nav>
        <div class="container">
        @yield('body')
        </div>
        @include('layout.footer')
    </body>
</html>
